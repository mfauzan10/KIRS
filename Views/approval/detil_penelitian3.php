<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penelitian - Full Board Review</title>
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
            background: linear-gradient(135deg, #fd79a8 0%, #fdcb6e 100%);
            color: #2d3436;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 600;
            font-size: 1.1em;
        }

        .presentation-notice {
            background: linear-gradient(135deg, #74b9ff 0%, #0984e3 100%);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            text-align: center;
        }

        .presentation-notice h3 {
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .presentation-notice p {
            margin-bottom: 15px;
            font-size: 1.05em;
        }

        .schedule-info {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 15px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .schedule-info h4 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 1.2em;
        }

        .schedule-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ecf0f1;
        }

        .schedule-item:last-child {
            border-bottom: none;
        }

        .schedule-label {
            font-weight: 600;
            color: #2c3e50;
        }

        .schedule-value {
            color: #495057;
            font-size: 1.05em;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .btn-schedule {
            background: linear-gradient(135deg, #a29bfe 0%, #6c5ce7 100%);
            color: white;
            flex: 1;
            padding: 15px;
            font-size: 1.1em;
            font-weight: 600;
        }

        .btn-postpone {
            background: linear-gradient(135deg, #fd79a8 0%, #e84393 100%);
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

        .progress-section {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e8ecf3;
            margin-top: 25px;
        }

        .progress-section h1 {
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
            background: #00b894;
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
            background: #00b894;
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

        .alert-warning {
            background: #fff3cd;
            border-color: #ffeaa7;
            color: #856404;
        }

        .committee-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .committee-info h4 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 1.2em;
        }

        .committee-member {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ecf0f1;
        }

        .committee-member:last-child {
            border-bottom: none;
        }

        .member-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            margin-right: 15px;
        }

        .member-info {
            flex: 1;
        }

        .member-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 2px;
        }

        .member-role {
            font-size: 0.9em;
            color: #6c757d;
        }

        .icon {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        .requirements-section {
            background: #e8f5e8;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid #00b894;
        }

        .requirements-section h4 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 1.2em;
        }

        .requirements-list {
            list-style: none;
            padding: 0;
        }

        .requirements-list li {
            padding: 8px 0;
            color: #495057;
            padding-left: 20px;
            position: relative;
        }

        .requirements-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #00b894;
            font-weight: 600;
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
                    <div class="detail-value">Studi Efektivitas Obat ABC</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Tanggal</div>
                    <div class="detail-value">20 Juni 2025</div>
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
                <h2>📋 Status Full Board</h2>
                
                <div class="current-status">
                    Status Saat Ini: <strong>Full Board Review</strong>
                </div>

                <div class="presentation-notice">
                    <h3>📅 Jadwal Presentasi</h3>
                    <p>Pemohon dijadwalkan untuk presentasi di hadapan Komisi Etik Penelitian Kesehatan</p>
                    
                    <div class="schedule-info">
                        <h4>Detail Jadwal:</h4>
                        <div class="schedule-item">
                            <div class="schedule-label">Tanggal:</div>
                            <div class="schedule-value">Selasa, 15 Juli 2025</div>
                        </div>
                        <div class="schedule-item">
                            <div class="schedule-label">Waktu:</div>
                            <div class="schedule-value">09:00 - 10:30 WIB</div>
                        </div>
                        <div class="schedule-item">
                            <div class="schedule-label">Tempat:</div>
                            <div class="schedule-value">Ruang Komisi Etik, Gedung A Lt. 3</div>
                        </div>
                        <div class="schedule-item">
                            <div class="schedule-label">Durasi:</div>
                            <div class="schedule-value">90 menit (60 menit presentasi + 30 menit Q&A)</div>
                        </div>
                    </div>
                </div>

                <div class="requirements-section">
                    <h4>📋 Persyaratan Presentasi:</h4>
                    <ul class="requirements-list">
                        <li>Menyiapkan slide presentasi (maksimal 20 slide)</li>
                        <li>Membawa hard copy proposal penelitian</li>
                        <li>Membawa dokumen pendukung lainnya</li>
                        <li>Konfirmasi kehadiran H-1 presentasi</li>
                    </ul>
                </div>

                <div class="committee-info">
                    <h4>👥 Komisi Etik yang Akan Hadir:</h4>
                    <div class="committee-member">
                        <div class="member-avatar">DR</div>
                        <div class="member-info">
                            <div class="member-name">Dr. Sarah Wijaya, M.D.</div>
                            <div class="member-role">Ketua Komisi Etik</div>
                        </div>
                    </div>
                    <div class="committee-member">
                        <div class="member-avatar">PR</div>
                        <div class="member-info">
                            <div class="member-name">Prof. Ahmad Rahman, Ph.D.</div>
                            <div class="member-role">Ahli Bioetika</div>
                        </div>
                    </div>
                    <div class="committee-member">
                        <div class="member-avatar">DR</div>
                        <div class="member-info">
                            <div class="member-name">Dr. Lisa Chen, M.Sc.</div>
                            <div class="member-role">Ahli Metodologi</div>
                        </div>
                    </div>
                    <div class="committee-member">
                        <div class="member-avatar">MR</div>
                        <div class="member-info">
                            <div class="member-name">Maria Rodriguez, S.H.</div>
                            <div class="member-role">Perwakilan Hukum</div>
                        </div>
                    </div>
                </div>

                <div class="action-buttons">
                    <button class="btn btn-schedule" onclick="confirmPresentation()">
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z"/>
                        </svg>
                        Konfirmasi Kehadiran
                    </button>
                    <button class="btn btn-postpone" onclick="requestReschedule()">
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"/>
                        </svg>
                        Minta Reschedule
                    </button>
                </div>
            </div>
        </div>

        <div class="progress-section">
            <h3>🔄 Progress Pengajuan</h3>
            <div class="progress-bar">
                <div class="progress-step completed">
                    <div class="progress-circle">1</div>
                    <div class="progress-label">Submitted</div>
                </div>
                <div class="progress-step">
                    <div class="progress-circle">2</div>
                    <div class="progress-label">Dokumen Etik</div>
                </div>
                <div class="progress-step">
                    <div class="progress-circle">3</div>
                    <div class="progress-label">Pelunasan Biaya</div>
                </div>
                <div class="progress-step">
                    <div class="progress-circle">4</div>
                    <div class="progress-label">Selesai</div>
                </div>
            </div>
            
            <div class="alert alert-warning">
                <strong>Penting:</strong> Penelitian ini memerlukan review lengkap oleh komisi etik. Pemohon akan mempresentasikan penelitiannya di hadapan komisi untuk evaluasi komprehensif.
            </div>
        </div>
    </div>

    <script>
        function confirmPresentation() {
            if (confirm('Apakah Anda yakin akan menghadiri presentasi sesuai jadwal yang telah ditentukan?')) {
                showNotification('Kehadiran berhasil dikonfirmasi! Reminder akan dikirim H-1 presentasi.', 'success');
                
                // Update button status
                const confirmBtn = document.querySelector('.btn-schedule');
                confirmBtn.innerHTML = `
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z"/>
                    </svg>
                    Kehadiran Dikonfirmasi
                `;
                confirmBtn.style.background = 'linear-gradient(135deg, #00b894 0%, #00cec9 100%)';
                confirmBtn.disabled = true;
                confirmBtn.style.cursor = 'not-allowed';
            }
        }
        
        function requestReschedule() {
            const reason = prompt('Mohon berikan alasan untuk reschedule:');
            if (reason && reason.trim()) {
                showNotification('Permintaan reschedule telah dikirim ke komisi etik.', 'info');
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
            notification.style.maxWidth = '300px';
            
            if (type === 'success') {
                notification.style.background = 'linear-gradient(135deg, #00b894 0%, #00cec9 100%)';
            } else if (type === 'info') {
                notification.style.background = 'linear-gradient(135deg, #74b9ff 0%, #0984e3 100%)';
            } else {
                notification.style.background = 'linear-gradient(135deg, #d63031 0%, #e17055 100%)';
            }
            
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 5000);
        }
        
        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideIn {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }
            
            .presentation-notice {
                animation: pulse 2s ease-in-out infinite;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>