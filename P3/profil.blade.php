<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">

    <!-- Card Container -->
    <div class="bg-white w-full max-w-sm rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
        
        <!-- Header / Cover Area -->
        <div class="h-32 bg-gradient-to-r from-blue-50 via-slate-50 to-indigo-50 relative border-b border-slate-100">
            <!-- Avatar Circle -->
            <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2">
                <div class="w-24 h-24 bg-white rounded-full p-1.5 shadow-md shadow-slate-200/50">
                    <div class="w-full h-full bg-slate-100 rounded-full flex items-center justify-center text-slate-400">
                        <!-- Ikon User Default -->
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="pt-16 pb-8 px-8 text-center">
            
            <!-- Biodata -->
            <h1 class="text-2xl font-bold text-slate-800 tracking-tight">{{ $nama }}</h1>
            
            <div class="mt-3 flex items-center justify-center">
                <!-- Badge Kelas -->
                <span class="bg-slate-50 text-slate-600 text-xs font-semibold px-4 py-1.5 rounded-full border border-slate-200">
                    Kelas: {{ $kelas }}
                </span>
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-8 flex justify-center gap-3">
                <button onclick="window.history.back()" class="w-full bg-white border border-slate-200 hover:bg-slate-50 hover:border-slate-300 text-slate-700 font-semibold py-2.5 px-4 rounded-xl transition duration-200 text-sm shadow-sm">
                    Kembali
                </button>
                <button class="w-full bg-slate-800 hover:bg-slate-900 text-white font-semibold py-2.5 px-4 rounded-xl transition duration-200 text-sm shadow-sm">
                    Edit Profil
                </button>
            </div>
            
        </div>
    </div>

</body>
</html>