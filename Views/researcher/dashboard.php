<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Approval Dashboard</title>
  <style>
    :root {
      --color-primary: #36C0D1;     /* Pending */
      --color-secondary: #868e96;  /* Draft */
      --color-success: #2BB3A3;     /* Approved */
      --color-danger: #E57373;     /* Rejected */
      --color-warning: #ffcc00;     /* Fullboard */
      --color-bg: #FFFFFF;
      --color-text: #333333;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: var(--color-bg);
      padding: 2rem;
      color: var(--color-text);
    }

    h1 {
      text-align: center;
      color: var(--color-primary);
      margin-bottom: 2rem;
    }

    section {
      margin-bottom: 3rem;
    }

    .status-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 1rem;
      margin-bottom: 3rem;
    }

    .card {
      border: 2px solid var(--color-primary);
      border-radius: 1rem;
      padding: 1.5rem;
      text-align: center;
      background: var(--color-bg);
      transition: transform 0.2s;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h2 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
    }

    .card p {
      font-size: 1.1rem;
      color: #555;
    }

    .card.draft {
      border-color: var(--color-secondary);
    }

    .card.draft h2 {
      color: var(--color-secondary);
    }

    .card.pending {
      border-color: var(--color-primary);
    }

    .card.pending h2 {
      color: var(--color-primary);
    }

    .card.approved {
      border-color: var(--color-success);
    }

    .card.approved h2 {
      color: var(--color-success);
    }

    .card.rejected {
      border-color: var(--color-danger);
    }

    .card.rejected h2 {
      color: var(--color-danger);
    }

    .card.fullboard {
      border-color: var(--color-warning);
    }

    .card.fullboard h2 {
      color: var(--color-warning);
    }

    /* Pie Chart */
    .pie-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .pie {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: conic-gradient(
        var(--color-success) 0% 40%,     /* Approved */
        var(--color-primary) 40% 60%,    /* Pending */
        var(--color-secondary) 60% 75%,  /* Draft */
        var(--color-warning) 75% 90%,    /* Fullboard */
        var(--color-danger) 90% 100%     /* Rejected */
      );
      position: relative;
    }

    .pie::before {
      content: "";
      position: absolute;
      width: 120px;
      height: 120px;
      background: var(--color-bg);
      border-radius: 50%;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .legend {
      margin-top: 1rem;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .legend-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.9rem;
    }

    .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      display: inline-block;
    }

    .dot.draft {
      background: var(--color-secondary);
    }

    .dot.pending {
      background: var(--color-primary);
    }

    .dot.approved {
      background: var(--color-success);
    }

    .dot.rejected {
      background: var(--color-danger);
    }

    .dot.fullboard {
      background: var(--color-warning);
    }

    .section-grid {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .left-column {
      flex: 1 1 60%;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .welcome-card {
      background: var(--color-bg);
      border: 2px solid var(--color-primary);
      border-radius: 1rem;
      padding: 1.5rem;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .welcome-card h2 {
      color: var(--color-primary);
      margin-bottom: 0.5rem;
    }

    .pie-column {
      flex: 1 1 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .filled-card {
      border: none;
      color: #ffffff;
    }

    .filled-card.draft {
      background: var(--color-secondary);
    }

    .filled-card.pending {
      background: var(--color-primary);
    }

    .filled-card.approved {
      background: var(--color-success);
    }

    .filled-card.rejected {
      background: var(--color-danger);
    }

    .filled-card.fullboard {
      background: var(--color-warning);
    }

    .filled-card h2,
    .filled-card p {
      color: #ffffff !important;
    }

    .full-button {
      display: block;
      width: 100%;
      margin-top: 1.5rem;
      padding: 1rem;
      text-align: center;
      background-color: var(--color-primary);
      color: #ffffff;
      text-decoration: none;
      border: none;
      border-radius: 0.5rem;
      font-size: 1rem;
      font-weight: bold;
      transition: background-color 0.2s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }

    .full-button:hover {
      background-color: #2aa7ba;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .section-grid {
        flex-direction: column;
      }

      .pie-column {
        padding: 1rem 0;
      }

      .status-cards {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>
</head>

<body>

  <h1>Approval Dashboard</h1>

  <section class="section-card">
    <div class="section-grid">
      <!-- Left column -->
      <div class="left-column">
        <!-- Welcome -->
        <div class="welcome-card">
          <h2>Welcome, Researcher!</h2>
          <p>Here’s your current approval overview.</p>
        </div>

        <!-- Status Cards -->
        <div class="status-cards filled">
          <a href="pending.php" style="text-decoration: none;">
            <div class="card draft filled-card">
                <h2>Pending</h2>
                <p>1 item(s)</p>
            </div>
          </a>
          <div class="card pending filled-card">
            <h2>Accepted</h2>
            <p>0 item(s)</p>
          </div>
          <div class="card approved filled-card">
            <h2>Assempted</h2>
            <p>0 item(s)</p>
          </div>
          <div class="card fullboard filled-card">
            <h2>Fullboard</h2>
            <p>0 item(s)</p>
          </div>
          <div class="card rejected filled-card">
            <h2>Rejected</h2>
            <p>1 item(s)</p>
          </div>
        </div>

        <!-- Button -->
        <a href="approvals/index.html" class="full-button">See All Approvals</a>
        <a href="form_riset.php" class="full-button" style="margin-top: 0;">Ajukan Penelitian</a>
      </div>

      <!-- Right column: Pie Chart -->
      <div class="card pie-column">
        <div class="pie-side">
          <div class="pie"></div>
          <div class="legend">
            <div class="legend-item"><span class="dot approved"></span> Approved</div>
            <div class="legend-item"><span class="dot pending"></span> Pending</div>
            <div class="legend-item"><span class="dot draft"></span> Draft</div>
            <div class="legend-item"><span class="dot fullboard"></span> Fullboard</div>
            <div class="legend-item"><span class="dot rejected"></span> Rejected</div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>