<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penelitian - Approval</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: #2c3e50;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%,rgb(131, 178, 228) 100%);
            color: white;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 25px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.1em;
            opacity: 0.9;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 25px;
        }

        .detail-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e8ecf3;
        }

        .detail-row {
            display: flex;
            margin-bottom: 20px;
            padding: 15px 0;
            border-bottom: 1px solid #f1f3f5;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: #495057;
            min-width: 180px;
            margin-right: 20px;
        }

        .detail-value {
            flex: 1;
            color: #2c3e50;
            font-size: 1.05em;
        }

        .file-actions {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.9em;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }

        .btn-secondary {
            background: #e9ecef;
            color: #495057;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .approval-panel {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e8ecf3;
            height: fit-content;
        }

        .approval-panel h2 {
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 1.8em;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }

        .current-status {
            background: linear-gradient(135deg, #ffeaa7 0%, #fab1a0 100%);
            color: #2d3436;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 600;
            font-size: 1.1em;
        }

        .status-update {
            margin-bottom: 25px;
        }

        .status-update label {
            display: block;
            margin-bottom: 12px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 1.1em;
        }

        .status-select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e8ecf3;
            border-radius: 10px;
            font-size: 1.05em;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .status-select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .status-descriptions {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .status-descriptions h4 {
            color: #495057;
            margin-bottom: 15px;
            font-size: 1.1em;
        }

        .status-descriptions ul {
            list-style: none;
            padding-left: 0;
        }

        .status-descriptions li {
            margin-bottom: 12px;
            padding: 10px;
            background: white;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }

        .status-descriptions li strong {
            color: #2c3e50;
        }

        .comment-section {
            margin-bottom: 25px;
        }

        .comment-section label {
            display: block;
            margin-bottom: 12px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 1.1em;
        }

        .comment-textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e8ecf3;
            border-radius: 10px;
            font-size: 1em;
            font-family: inherit;
            resize: vertical;
            min-height: 120px;
            transition: all 0.3s ease;
        }

        .comment-textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .action-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-approve {
            background: linear-gradient(135deg, #00b894 0%, #00cec9 100%);
            color: white;
            flex: 1;
            padding: 15px;
            font-size: 1.1em;
            font-weight: 600;
        }

        .btn-reject {
            background: linear-gradient(135deg, #d63031 0%, #e17055 100%);
            color: white;
            flex: 1;
            padding: 15px;
            font-size: 1.1em;
            font-weight: 600;
        }

        .progress-section {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e8ecf3;
            margin-top: 25px;
        }

        .progress-section h3 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .progress-bar {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .progress-step {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .progress-step::before {
            content: '';
            position: absolute;
            top: 25px;
            left: 50%;
            width: 100%;
            height: 4px;
            background: #e8ecf3;
            z-index: 1;
        }

        .progress-step:last-child::before {
            display: none;
        }

        .progress-step.completed::before {
            background:rgb(227, 95, 72);
        }

        .progress-step.active::before {
            background: linear-gradient(90deg, #00b894 50%, #e8ecf3 50%);
        }

        .progress-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #e8ecf3;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 1.2em;
            z-index: 2;
            position: relative;
        }

        .progress-step.completed .progress-circle {
            background:rgb(231, 48, 19);
            color: white;
        }

        .progress-step.active .progress-circle {
            background: #667eea;
            color: white;
        }

        .progress-label {
            margin-top: 10px;
            font-size: 0.9em;
            color: #6c757d;
            text-align: center;
        }

        .progress-step.completed .progress-label,
        .progress-step.active .progress-label {
            color: #2c3e50;
            font-weight: 600;
        }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
        }

        .alert-info {
            background: #d1ecf1;
            border-color: #bee5eb;
            color:rgb(150, 12, 12);
        }

        .icon {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔍 Detail Penelitian</h1>
            <p></p>
        </div>

        <div class="main-content">
            <div class="detail-card">
                <div class="detail-row">
                    <div class="detail-label">Nama Peneliti:</div>
                    <div class="detail-value">Muhammad Fauzan</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Judul Penelitian:</div>
                    <div class="detail-value">Evaluasi Sistem Pelayanan Gizi di Rumah Sakit</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Tanggal</div>
                    <div class="detail-value">06 Juli 2025</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">File Proposal:</div>
                    <div class="detail-value">
                        <div class="file-actions">
                            <a href="#" class="btn btn-primary">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                </svg>
                                Unduh Proposal
                            </a>
                            <a href="#" class="btn btn-secondary">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"/>
                                </svg>
                                Preview
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="detail-row">
                    <div class="detail-label">Unggah Dokumen Etik:</div>
                    <div class="detail-value">
                        <div class="file-actions">
                            <a href="#" class="btn btn-primary">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                </svg>
                                Unduh Dokumen
                            </a>
                            <a href="#" class="btn btn-secondary">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"/>
                                </svg>
                                Preview
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="approval-panel">
                <h2>📋 Panel Approval</h2>
                
                <div class="current-status">
                    Status Saat Ini: <strong>Discontinuing</strong>
                </div>

                <!-- <div class="status-update">
                    <label for="status-select">Pilih Status Baru:</label>
                    <select id="status-select" class="status-select">
                        <option value="">-- Pilih Status --</option>
                        <option value="exempted">Exempted</option>
                        <option value="expedited">Expedited</option>
                        <option value="full-board">Full Board</option>
                        <option value="discontinuing">Discontinuing</option>
                    </select>
                </div> -->

                <div class="status-descriptions">
                    <h4>📝 Keterangan Status:</h4>
                    <ul>
                        <li><strong>Exempted:</strong> Penelitian dinyatakan layak dan diterbitkan surat kelayakan etik</li>
                        <li><strong>Expedited:</strong> Usulan diklarifikasi atau perlu diperbaiki sesuai masukan penelaah</li>
                        <li><strong>Full Board:</strong> Pemohon dijadwalkan untuk presentasi di hadapan Komisi Etik Penelitian Kesehatan</li>
                        <li><strong>Discontinuing:</strong> Usulan tidak disetujui secara etik dan dapat diajukan ulang setelah direvisi</li>
                    </ul>
                </div>

                <!-- <div class="comment-section">
                    <label for="comment">Catatan/Komentar:</label>
                    <textarea id="comment" class="comment-textarea" placeholder="Berikan catatan atau komentar untuk peneliti..."></textarea>
                </div> -->

                <!-- <div class="action-buttons">
                    <button class="btn btn-approve" onclick="approveResearch()">
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z"/>
                        </svg>
                        Approve
                    </button>
                    <button class="btn btn-reject" onclick="rejectResearch()">
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
                        </svg>
                        Reject
                    </button>
                </div> -->
            </div>
        </div>

        <div class="progress-section">
            <h3>🔄 Progress Pengajuan</h3>
            <div class="progress-bar">
                <div class="progress-step completed">
                    <div class="progress-circle">1</div>
                    <div class="progress-label">Discontinuing</div>
                </div>
                <div class="progress-step">
                    <div class="progress-circle">2</div>
                    <div class="progress-label">Dokumen Etik</div>
                </div>
                <div class="progress-step">
                    <div class="progress-circle">3</div>
                    <div class="progress-label">Penilaian</div>
                </div>
                <div class="progress-step">
                    <div class="progress-circle">4</div>
                    <div class="progress-label">Selesai</div>
                </div>
            </div>
            
            <div class="alert alert-info">
                <strong>Info:</strong> Berkas yang sudah disubmit tidak disetujui secara etik, anda dapat mengajukan ulang setelah
            </div>
        </div>
    </div>

    <script>
        function approveResearch() {
            const status = document.getElementById('status-select').value;
            const comment = document.getElementById('comment').value;
            
            if (!status) {
                alert('Silakan pilih status terlebih dahulu!');
                return;
            }
            
            if (confirm(`Apakah Anda yakin ingin menyetujui penelitian dengan status "${status}"?`)) {
                // Simulate API call
                showNotification('Penelitian berhasil disetujui!', 'success');
                updateProgressBar(status);
            }
        }
        
        function rejectResearch() {
            const comment = document.getElementById('comment').value;
            
            if (!comment.trim()) {
                alert('Silakan berikan alasan penolakan!');
                return;
            }
            
            if (confirm('Apakah Anda yakin ingin menolak penelitian ini?')) {
                // Simulate API call
                showNotification('Penelitian ditolak!', 'error');
                updateProgressBar('rejected');
            }
        }
        
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.style.position = 'fixed';
            notification.style.top = '20px';
            notification.style.right = '20px';
            notification.style.padding = '15px 20px';
            notification.style.borderRadius = '8px';
            notification.style.color = 'white';
            notification.style.fontWeight = '600';
            notification.style.zIndex = '1000';
            notification.style.animation = 'slideIn 0.3s ease';
            
            if (type === 'success') {
                notification.style.background = 'linear-gradient(135deg, #00b894 0%, #00cec9 100%)';
            } else {
                notification.style.background = 'linear-gradient(135deg, #d63031 0%, #e17055 100%)';
            }
            
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }
        
        function updateProgressBar(status) {
            const steps = document.querySelectorAll('.progress-step');
            const currentStatus = document.querySelector('.current-status');
            
            // Reset all steps
            steps.forEach(step => {
                step.classList.remove('active', 'completed');
            });
            
            if (status === 'rejected' || status === 'discontinuing') {
                currentStatus.innerHTML = 'Status Saat Ini: <strong>Ditolak</strong>';
                currentStatus.style.background = 'linear-gradient(135deg, #d63031 0%, #e17055 100%)';
                currentStatus.style.color = 'white';
            } else {
                // Mark steps as completed based on status
                steps[0].classList.add('completed');
                
                if (status === 'exempted' || status === 'expedited' || status === 'full-board') {
                    steps[1].classList.add('active');
                }
                
                const statusText = {
                    'exempted': 'Exempted',
                    'expedited': 'Expedited',
                    'full-board': 'Full Board'
                };
                
                currentStatus.innerHTML = `Status Saat Ini: <strong>${statusText[status] || 'Dokumen Etik'}</strong>`;
                currentStatus.style.background = 'linear-gradient(135deg, #00b894 0%, #00cec9 100%)';
                currentStatus.style.color = 'white';
            }
        }
        
        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideIn {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>