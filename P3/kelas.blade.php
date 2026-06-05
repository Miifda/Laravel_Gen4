<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-sm rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
        
        <div class="h-32 bg-gradient-to-r from-violet-50 via-purple-50 to-fuchsia-50 relative border-b border-slate-100">
            <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2">
                <div class="w-24 h-24 bg-white rounded-full p-1.5 shadow-md shadow-slate-200/50">
                    <div class="w-full h-full bg-violet-50 rounded-full flex items-center justify-center text-violet-500">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-16 pb-8 px-8 text-center">
            
            <p class="text-xs font-bold text-violet-500 uppercase tracking-widest mb-1">Informasi Ruang Kelas</p>
            
            <h1 class="text-2xl font-bold text-slate-800 tracking-tight">{{ $nama_kelas }}</h1>
            
            <div class="mt-4 flex flex-col items-center justify-center gap-1">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Wali Kelas</span>
                <span class="bg-slate-50 text-slate-700 text-sm font-medium px-4 py-2 rounded-xl border border-slate-200 w-full">
                    {{ $wali_kelas }}
                </span>
            </div>

            <div class="mt-8">
                <button onclick="window.history.back()" class="w-full bg-violet-600 hover:bg-violet-700 text-white font-semibold py-2.5 px-4 rounded-xl transition duration-200 text-sm shadow-sm shadow-violet-200">
                    Kembali
                </button>
            </div>
            
        </div>
    </div>

</body>
</html>