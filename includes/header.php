<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energieberatung & iSFP in Weil der Stadt | Ingenieurbüro Idrizi</title>
    <meta name="description" content="Geförderte Energieberatung (iSFP) durch M.Sc. Ingenieur Sinan Idrizi in Weil der Stadt.">

    <!-- Strukturierte Daten für Google (LocalBusiness) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Ingenieurbüro Idrizi",
      "url": "https://www.ing-idrizi.de",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Weil der Stadt",
        "postalCode": "71263",
        "addressCountry": "DE"
      }
    }
    </script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            navy: '#0F172A',
                            slate: '#1E293B',
                            surface: '#4F172A',
                            border: '#334155',
                            crimson: '#E11D48',
                            green: '#10B981',
                            gold: '#D97706',
                            blue: '#3883D6',
                        }
                    },
                    fontFamily: {
                        mono: ['JetBrains Mono', 'Fira Code', 'monospace'],
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0B0F17;
            color: #E2E8F0;
        }
        .font-mono-tech {
            font-family: 'JetBrains Mono', monospace;
        }
        .cad-grid {
            background-size: 40px 40px;
            background-image:
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }
    </style>
</head>
<body class="cad-grid min-h-screen flex flex-col justify-between selection:bg-brand-crimson selection:text-white">

    <!-- Header / Navigation -->
    <header class="sticky top-0 z-50 bg-[#0B0F17]/90 backdrop-blur-md border-b border-brand-border/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3 group py-2">
                <img src="img/logo.png" alt="Ingenieurbüro Idrizi Logo" class="h-10 w-auto object-contain">
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#leistungen" class="hover:text-white transition-colors">Leistungen</a>
                <a href="#rechner" class="hover:text-white transition-colors">Rechner</a>
                <a href="#kontakt" class="hover:text-white transition-colors">Kontakt</a>
            </nav>
            <a href="#kontakt" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 text-xs font-mono-tech font-semibold text-white bg-brand-slate border border-brand-border hover:border-brand-crimson hover:bg-brand-crimson/10 rounded transition-all">
                <i class="fa-solid fa-calculator text-brand-crimson"></i>
                PROJEKT ANFRAGEN
            </a>
        </div>
    </header>
