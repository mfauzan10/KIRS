<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Approval Dashboard</title>
  <style>
    :root {
      --color-primary: #36C0D1;       /* Tetap biru untuk highlight utama */
      --color-pending: #868e96;       /* Abu-abu untuk status pending */
      --color-success: #2ecc71;       /* Approved */
      --color-danger: #E57373;        /* Rejected */
      --color-warning: #f1c40f;       /* Assempted / Accepted */
      --color-fullboard: #2BB3A3;     /* Fullboard hijau lama */
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

    .status-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 1rem;
      margin-bottom: 3rem;
    }

    .card {
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
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    .card p {
      font-size: 1rem;
      color: #fff;
    }

    .filled-card {
      border: none;
      color: #ffffff;
    }

    .filled-card.pending {
      background: var(--color-pending);
    }

    .filled-card.approved {
      background: var(--color-success);
    }

    .filled-card.rejected {
      background: var(--color-danger);
    }

    .filled-card.fullboard {
      background: var(--color-fullboard);
    }

    .filled-card.assempted,
    .filled-card.accepted {
      background: var(--color-warning);
      color: #333;
    }

    .filled-card.assempted h2,
    .filled-card.assempted p,
    .filled-card.accepted h2,
    .filled-card.accepted p {
      color: #333 !important;
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

    .pie {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: conic-gradient(
        var(--color-pending) 0% 75%,     
        var(--color-success) 75% 100%    
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

    .dot.pending {
      background: var(--color-pending);
    }

    .dot.approved {
      background: var(--color-success);
    }

    .dot.rejected {
      background: var(--color-danger);
    }

    .dot.fullboard {
      background: var(--color-fullboard);
    }

    .dot.assempted,
    .dot.accepted {
      background: var(--color-warning);
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
        <div class="welcome-card">
          <h2>Welcome, Researcher!</h2>
          <p>Here’s your current approval overview.</p>
        </div>

        <div class="status-cards filled">
          <div class="card pending filled-card">
            <h2>Pending</h2>
            <p>3 item(s)</p>
          </div>
          <div class="card approved filled-card">
            <h2>Approved</h2>
            <p>1 item(s)</p>
          </div>
          <div class="card fullboard filled-card">
            <h2>Fullboard</h2>
            <p>0 item(s)</p>
          </div>
          <div class="card assempted filled-card">
            <h2>Assempted</h2>
            <p>0 item(s)</p>
          </div>
          <div class="card rejected filled-card">
            <h2>Rejected</h2>
            <p>0 item(s)</p>
          </div>
        </div>

        <a href="dashboard_new.php" class="full-button">See All Approvals</a>
        <a href="form_riset.php" class="full-button" style="margin-top: 0;">Ajukan Penelitian</a>
      </div>

      <!-- Pie Chart -->
      <div class="card pie-column">
        <div class="pie-side">
          <div class="pie"></div>
          <div class="legend">
            <div class="legend-item"><span class="dot pending"></span> Pending</div>
            <div class="legend-item"><span class="dot approved"></span> Approved</div>
            <div class="legend-item"><span class="dot fullboard"></span> Fullboard</div>
            <div class="legend-item"><span class="dot assempted"></span> Assempted</div>
            <div class="legend-item"><span class="dot rejected"></span> Rejected</div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
