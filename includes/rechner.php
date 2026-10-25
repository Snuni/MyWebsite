<!-- Kreativer Förder- & Wertschöpfungsrechner -->
<section id="rechner" class="py-20 border-b border-brand-border/40 bg-slate-950/40 relative overflow-hidden">
    <!-- Dezenter Glow im Hintergrund -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand-green/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-green/10 border border-brand-green/30 text-xs font-mono-tech text-brand-green">
                <i class="fa-solid fa-wand-magic-sparkles"></i> Staatliche Förder-Maximierung
            </div>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">Vom Staat gesponsert: Ihre Ersparnis im Fokus.</h2>
            <p class="text-slate-400 text-sm max-w-xl mx-auto font-light">
                Erleben Sie, wie massive staatliche Zuschüsse Ihre Investitionskosten drastisch senken. Profitieren Sie von vollen Förderquoten nach aktueller BAFA- &amp; KfW-Richtlinie.
            </p>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 items-stretch bg-brand-slate/40 border border-brand-border rounded-2xl p-6 sm:p-10 backdrop-blur-md shadow-2xl">
            
            <!-- Linke Spalte: Die drei Hauptpakete (Kacheln) -->
            <div class="lg:col-span-7 flex flex-col justify-between space-y-6">
                <div>
                    <div class="text-xs font-mono-tech text-slate-400 uppercase tracking-wider mb-4">1. Wählen Sie Ihr Leistungspaket:</div>
                    
                    <div class="grid sm:grid-cols-3 gap-3" id="project-options">
                        <!-- Paket 1: iSFP -->
                        <button type="button" onclick="setProject('isfp')" id="btn-isfp" class="project-btn text-left p-4 rounded-xl border border-brand-green bg-brand-green/10 transition-all group relative overflow-hidden flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <span class="w-7 h-7 rounded bg-brand-navy border border-brand-border flex items-center justify-center text-brand-green font-mono-tech text-xs">01</span>
                                    <i class="fa-solid fa-file-invoice-dollar text-brand-green text-sm"></i>
                                </div>
                                <div class="font-bold text-white text-xs group-hover:text-brand-green transition-colors">iSFP-Energieberatung</div>
                                <div class="text-[10px] text-slate-400 font-mono-tech mt-1">Der Masterplan fürs Haus</div>
                            </div>
                            <div class="mt-4 pt-2 border-t border-brand-border/60">
                                <div class="text-[10px] text-slate-400 uppercase font-mono-tech">Zuschuss:</div>
                                <div class="text-xs font-mono-tech font-bold text-brand-green">Bis zu 50% / 650 €</div>
                            </div>
                        </button>

                        <!-- Paket 2: Maßnahmen -->
                        <button type="button" onclick="setProject('massnahmen')" id="btn-massnahmen" class="project-btn text-left p-4 rounded-xl border border-brand-border bg-brand-navy/60 hover:border-slate-500 transition-all group flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <span class="w-7 h-7 rounded bg-brand-navy border border-brand-border flex items-center justify-center text-slate-400 font-mono-tech text-xs">02</span>
                                    <i class="fa-solid fa-house-chimney-crack text-brand-blue text-sm"></i>
                                </div>
                                <div class="font-bold text-white text-xs group-hover:text-brand-blue transition-colors">Sanierungs-Paket</div>
                                <div class="text-[10px] text-slate-400 font-mono-tech mt-1">Dämmung, Fenster, TGA</div>
                            </div>
                            <div class="mt-4 pt-2 border-t border-brand-border/60">
                                <div class="text-[10px] text-slate-400 uppercase font-mono-tech">Zuschuss:</div>
                                <div class="text-xs font-mono-tech font-bold text-brand-green">Bis zu 20% – 25%</div>
                            </div>
                        </button>

                        <!-- Paket 3: Wärmepumpe -->
                        <button type="button" onclick="setProject('waermepumpe')" id="btn-waermepumpe" class="project-btn text-left p-4 rounded-xl border border-brand-border bg-brand-navy/60 hover:border-slate-500 transition-all group flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <span class="w-7 h-7 rounded bg-brand-navy border border-brand-border flex items-center justify-center text-slate-400 font-mono-tech text-xs">03</span>
                                    <i class="fa-solid fa-seedling text-brand-green text-sm"></i>
                                </div>
                                <div class="font-bold text-white text-xs group-hover:text-brand-blue transition-colors">Wärmepumpen-Tausch</div>
                                <div class="text-[10px] text-slate-400 font-mono-tech mt-1">Zukunftssicheres Heizen</div>
                            </div>
                            <div class="mt-4 pt-2 border-t border-brand-border/60">
                                <div class="text-[10px] text-slate-400 uppercase font-mono-tech">Zuschuss:</div>
                                <div class="text-xs font-mono-tech font-bold text-brand-green">Bis zu 70% Förderbar</div>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Dezenter Mehrwert des Energieberaters -->
                <div class="p-4 rounded-xl bg-brand-navy/80 border border-brand-border space-y-2 mt-4">
                    <div class="flex items-center gap-2 text-xs font-mono-tech text-brand-green font-bold">
                        <i class="fa-solid fa-shield-halved"></i> Der zertifizierte Energieberater-Hebeleffekt
                    </div>
                    <p class="text-[11px] text-slate-400 font-mono-tech leading-relaxed">
                        Manchmal optional, manchmal Pflicht – aber <strong class="text-slate-200">immer Ihr Gewinn</strong>: Als zertifizierter Experte sichere ich Ihnen den wertvollen <strong class="text-brand-green">iSFP-Bonus (+5% mehr Förderung</strong> bei Einzelmaßnahmen) und übernehme die fehlerfreie BAFA/KfW-Antragstellung für maximale Auszahlungssicherheit.
                    </p>
                </div>
            </div>

            <!-- Rechte Spalte: Stark betonte Ersparnis-Bilanz (Fokus auf das, was der Staat zahlt) -->
            <div class="lg:col-span-5 bg-brand-navy/90 border border-brand-border rounded-xl p-6 sm:p-8 flex flex-col justify-between space-y-6 shadow-inner">
                <div class="flex justify-between items-center border-b border-brand-border pb-4">
                    <span class="text-xs font-mono-tech text-slate-400 uppercase tracking-wider">Förder- &amp; Ersparnisbilanz</span>
                    <span id="label-project-name" class="text-xs font-mono-tech px-2.5 py-1 rounded bg-brand-slate text-brand-green border border-brand-border font-bold">iSFP-Energieberatung</span>
                </div>

                <!-- Haupt-Eyecatcher: Eingesparte Summe -->
                <div class="text-center py-6 bg-brand-green/5 border border-brand-green/20 rounded-xl space-y-1 shadow-sm">
                    <div class="text-[11px] uppercase tracking-wider font-mono-tech text-brand-green">Vom Staat für Sie gespart (Zuschuss)</div>
                    <div id="val-zuschuss-big" class="text-3xl sm:text-4xl font-extrabold text-brand-green font-mono-tech">
                        850,00 €
                    </div>
                    <div id="val-quote-desc" class="text-[11px] text-slate-400 font-mono-tech pt-1">Entspricht ca. 45% staatlicher Kostenübernahme</div>
                </div>

                <!-- Kompakte Detail-Aufschlüsselung -->
                <div class="space-y-2 text-xs font-mono-tech">
                    <div class="flex justify-between text-slate-400 pb-1 border-b border-brand-border/40">
                        <span>Investition / Honorar (Brutto):</span>
                        <span id="val-brutto" class="text-slate-300 font-bold">2.261,00 €</span>
                    </div>
                    <div class="flex justify-between text-slate-400 pt-1">
                        <span>Effektiver Restaufwand:</span>
                        <span id="val-eigenanteil" class="text-slate-400">1.411,00 €</span>
                    </div>
                </div>

                <a href="#kontakt" class="w-full py-3.5 text-xs font-mono-tech font-bold uppercase tracking-wider text-center text-white bg-brand-crimson hover:bg-rose-700 rounded-lg transition-colors block shadow-lg shadow-rose-950/40">
                    Jetzt Fördermittel sichern &amp; anfragen <i class="fa-solid fa-arrow-right ml-1"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Script für die Live-Förderberechnung mit Fokus auf Ersparnis -->
<script>
    function setProject(type) {
        const btnIsfp = document.getElementById('btn-isfp');
        const btnMassnahmen = document.getElementById('btn-massnahmen');
        const btnWaermepumpe = document.getElementById('btn-waermepumpe');
        
        const labelName = document.getElementById('label-project-name');
        const valZuschussBig = document.getElementById('val-zuschuss-big');
        const valQuoteDesc = document.getElementById('val-quote-desc');
        const valBrutto = document.getElementById('val-brutto');
        const valEigenanteil = document.getElementById('val-eigenanteil');

        // Standard Button Style zurücksetzen
        const inactiveStyle = "project-btn text-left p-4 rounded-xl border border-brand-border bg-brand-navy/60 hover:border-slate-500 transition-all group flex flex-col justify-between";
        const activeStyle = "project-btn text-left p-4 rounded-xl border border-brand-green bg-brand-green/10 transition-all group relative overflow-hidden flex flex-col justify-between";

        btnIsfp.className = inactiveStyle;
        btnMassnahmen.className = inactiveStyle;
        btnWaermepumpe.className = inactiveStyle;

        let brutto, zuschuss, name, descText;

        if (type === 'isfp') {
            brutto = 2261.00; // inkl MwSt
            zuschuss = 850.00; // max förderung iSFP
            name = 'iSFP-Energieberatung';
            descText = 'Entspricht ca. 40% direkter staatlicher Kostenübernahme';
            btnIsfp.className = activeStyle;
        } else if (type === 'massnahmen') {
            brutto = 20000.00; // Beispielwert Maßnahmenpaket (Dämmung/Fenster)
            zuschuss = 5000.00; // 20% Grundförderung + 5% iSFP Bonus = 25%
            name = 'Sanierungs-Paket (z.B. Dämmung)';
            descText = '20% Grundförderung + 5% iSFP-Bonus (inkl. Effizienz-Bonus)';
            btnMassnahmen.className = activeStyle;
        } else {
            brutto = 35000.00; // Beispielwert Wärmepumpe
            zuschuss = 21000.00; // Bis zu 70% (Grund + Geschwindigkeitsbonus)
            name = 'Wärmepumpen-Tausch';
            descText = 'Bis zu 70% max. möglicher Förder-Zuschuss (inkl. Boni)';
            btnWaermepumpe.className = activeStyle;
        }

        const eigenanteil = Math.max(0, brutto - zuschuss);

        labelName.innerText = name;
        valZuschussBig.innerText = zuschuss.toLocaleString('de-DE', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' €';
        valQuoteDesc.innerText = descText;
        valBrutto.innerText = brutto.toLocaleString('de-DE', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' €';
        valEigenanteil.innerText = eigenanteil.toLocaleString('de-DE', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' €';
    }
</script>
