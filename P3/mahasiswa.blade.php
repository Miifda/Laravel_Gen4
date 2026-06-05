<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-sm rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
        
        <div class="h-32 bg-gradient-to-r from-emerald-50 via-teal-50 to-cyan-50 relative border-b border-slate-100">
            <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2">
                <div class="w-24 h-24 bg-white rounded-full p-1.5 shadow-md shadow-slate-200/50">
                    <div class="w-full h-full bg-emerald-50 rounded-full flex items-center justify-center text-emerald-500">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14v7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-16 pb-8 px-8 text-center">
            
            <p class="text-xs font-bold text-emerald-500 uppercase tracking-widest mb-1">Kartu Mahasiswa</p>
            <h1 class="text-2xl font-bold text-slate-800 tracking-tight">{{ $nama }}</h1>
            
            <div class="mt-3 flex items-center justify-center">
                <span class="bg-slate-50 text-slate-600 text-sm font-medium px-4 py-1.5 rounded-full border border-slate-200">
                    Jurusan: <span class="font-semibold text-slate-800">{{ $jurusan }}</span>
                </span>
            </div>

            <div class="mt-8">
                <button onclick="window.history.back()" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2.5 px-4 rounded-xl transition duration-200 text-sm shadow-sm shadow-emerald-200">
                    Kembali ke Beranda
                </button>
            </div>
            
        </div>
    </div>

</body>
</html>