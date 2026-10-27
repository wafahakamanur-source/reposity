<!DOCTYPE html>
=<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Tugas (localStorage)</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h2 class="mb-4 text-center">Aplikasi Manajemen Tugas (CRUD localStorage)</h2>

        <!-- Notifikasi / Alert -->
        <div id="alert-container"></div>

        <div class="row">
            <!-- Form Input -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 id="form-title" class="mb-0">Tambah Tugas Baru</h5>
                    </div>
                    <div class="card-body">
                        <form id="task-form">
                            <input type="hidden" id="task-id">
                            <div class="mb-3">
                                <label for="task-title" class="form-label">Judul Tugas</label>
                                <input type="text" class="form-control" id="task-title" required>
                            </div>
                            <div class="mb-3">
                                <label for="task-desc" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="task-desc" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" id="btn-save">Simpan Tugas</button>
                            <button type="button" class="btn btn-secondary w-100 mt-2 d-none" id="btn-cancel" onclick="resetForm()">Batal</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tabel Data -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">Daftar Tugas</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="task-table-body">
                                    <!-- Data akan dimuat otomatis oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script JavaScript localStorage -->
    <script>
        const STORAGE_KEY = 'LARAVEL_TASKS_LOCAL_STORAGE';

        // Load data saat halaman pertama kali dibuka
        document.addEventListener('DOMContentLoaded', function() {
            loadTasks();
        });

        function getTasks() {
            let tasks = localStorage.getItem(STORAGE_KEY);
            return tasks ? JSON.parse(tasks) : [];
        }

        function saveTasks(tasks) {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(tasks));
        }

        // 1. READ: Menampilkan data ke tabel HTML
        function loadTasks() {
            let tasks = getTasks();
            let tbody = document.getElementById('task-table-body');
            tbody.innerHTML = '';

            if (tasks.length === 0) {
                tbody.innerHTML = `<tr><td colspan="4" class="text-center text-muted">Belum ada tugas tersedia.</td></tr>`;
                return;
            }

            tasks.forEach((task, index) => {
                tbody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td><strong>${escapeHtml(task.title)}</strong></td>
                        <td>${escapeHtml(task.desc)}</td>
                        <td>
                            <button class="btn btn-warning btn-sm me-1" onclick="editTask(${task.id})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteTask(${task.id})">Hapus</button>
                        </td>
                    </tr>
                `;
            });
        }

        // 2. CREATE & UPDATE: Handle Submit Form
        document.getElementById('task-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let id = document.getElementById('task-id').value;
            let title = document.getElementById('task-title').value.trim();
            let desc = document.getElementById('task-desc').value.trim();

            if (!title || !desc) return;

            let tasks = getTasks();

            if (id === "") {
                // CREATE (Tambah baru)
                let newTask = {
                    id: Date.now(),
                    title: title,
                    desc: desc
                };
                tasks.push(newTask);
                showNotification('Tugas berhasil ditambahkan!', 'success');
            } else {
                // UPDATE (Perbarui data)
                tasks = tasks.map(task => {
                    if (task.id == id) {
                        return { ...task, title: title, desc: desc };
                    }
                    return task;
                });
                showNotification('Tugas berhasil diperbarui!', 'success');
                resetForm();
            }

            saveTasks(tasks);
            loadTasks();
            this.reset();
        });

        // 3. EDIT: Memasukkan data ke form
        function editTask(id) {
            let tasks = getTasks();
            let task = tasks.find(t => t.id == id);

            if (task) {
                document.getElementById('task-id').value = task.id;
                document.getElementById('task-title').value = task.title;
                document.getElementById('task-desc').value = task.desc;
                
                document.getElementById('form-title').innerText = 'Edit Tugas';
                document.getElementById('btn-save').innerText = 'Perbarui Tugas';
                document.getElementById('btn-cancel').classList.remove('d-none');
            }
        }

        // 4. DELETE: Menghapus data
        function deleteTask(id) {
            if (confirm('Apakah Anda yakin ingin menghapus tugas ini?')) {
                let tasks = getTasks();
                tasks = tasks.filter(task => task.id != id);
                
                saveTasks(tasks);
                loadTasks();
                showNotification('Tugas berhasil dihapus!', 'danger');
            }
        }

        function resetForm() {
            document.getElementById('task-form').reset();
            document.getElementById('task-id').value = '';
            document.getElementById('form-title').innerText = 'Tambah Tugas Baru';
            document.getElementById('btn-save').innerText = 'Simpan Tugas';
            document.getElementById('btn-cancel').classList.add('d-none');
        }

        // Fungsi Notifikasi Sederhana
        function showNotification(message, type) {
            let alertContainer = document.getElementById('alert-container');
            alertContainer.innerHTML = `
                <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
            setTimeout(() => {
                let alert = document.querySelector('.alert');
                if (alert) alert.remove();
            }, 3000);
        }

        // Keamanan dasar mencegah XSS
        function escapeHtml(text) {
            let map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' };
            return text.replace(/[&<>"']/g, function(m) { return map[m]; });
        }
    </script>
</body>
</html>