<!-- Kreativer Förder- & Wertschöpfungsrechner -->
<section id="rechner" class="py-20 border-b border-brand-border/40 bg-slate-950/40 relative overflow-hidden">
    <!-- Dezenter Glow im Hintergrund -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand-green/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-green/10 border border-brand-green/30 text-xs font-mono-tech text-brand-green">
                <i class="fa-solid fa-wand-magic-sparkles"></i> Staatlicher Förder-Rechner
            </div>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">Vom Staat gesponsert: Ihre maximale Ersparnis.</h2>
            <p class="text-slate-400 text-sm max-w-xl mx-auto font-light">
                Erfahren Sie, wie viel geschenktes Fördergeld Sie sich für Ihr Sanierungsvorhaben sichern können – exakt berechnet nach aktuellen BAFA- &amp; KfW-Förderrichtlinien.
            </p>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 items-stretch bg-brand-slate/40 border border-brand-border rounded-2xl p-6 sm:p-10 backdrop-blur-md shadow-2xl">
            
            <!-- Linke Spalte: Die 3 Hauptpakete -->
            <div class="lg:col-span-7 flex flex-col justify-between space-y-6">
                <div>
                    <div class="text-xs font-mono-tech text-slate-400 uppercase tracking-wider mb-4">1. Wählen Sie Ihr Vorhaben:</div>
                    
                    <div class="grid sm:grid-cols-3 gap-3" id="project-options">
                        <!-- Paket 1: iSFP -->
                        <button type="button" onclick="setProject('isfp')" id="btn-isfp" class="project-btn text-left p-4 rounded-xl border border-brand-green bg-brand-green/10 transition-all group relative overflow-hidden flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <span class="w-7 h-7 rounded bg-brand-navy border border-brand-border flex items-center justify-center text-brand-green font-mono-tech text-xs">01</span>
                                    <i class="fa-solid fa-file-invoice-dollar text-brand-green text-sm"></i>
                                </div>
                                <div class="font-bold text-white text-xs group-hover:text-brand-green transition-colors">iSFP-Energieberatung</div>
                                <div class="text-[10px] text-slate-400 font-mono-tech mt-1">Geförderter Masterplan</div>
                            </div>
                            <div class="mt-4 pt-2 border-t border-brand-border/60">
                                <div class="text-[10px] text-slate-400 uppercase font-mono-tech">Zuschuss-Höchstbetrag:</div>
                                <div class="text-xs font-mono-tech font-bold text-brand-green">Bis zu 650 €</div>
                            </div>
                        </button>

                        <!-- Paket 2: Sanierung / Hülle -->
                        <button type="button" onclick="setProject('massnahmen')" id="btn-massnahmen" class="project-btn text-left p-4 rounded-xl border border-brand-border bg-brand-navy/60 hover:border-slate-500 transition-all group flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <span class="w-7 h-7 rounded bg-brand-navy border border-brand-border flex items-center justify-center text-slate-400 font-mono-tech text-xs">02</span>
                                    <i class="fa-solid fa-house-chimney-crack text-brand-blue text-sm"></i>
                                </div>
                                <div class="font-bold text-white text-xs group-hover:text-brand-blue transition-colors">Einzelmaßnahmen</div>
                                <div class="text-[10px] text-slate-400 font-mono-tech mt-1">Dämmung, Fenster, TGA</div>
                            </div>
                            <div class="mt-4 pt-2 border-t border-brand-border/60">
                                <div class="text-[10px] text-slate-400 uppercase font-mono-tech">Zuschuss pro Jahr:</div>
                                <div class="text-xs font-mono-tech font-bold text-brand-green">Bis zu 10.500 €+</div>
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
                                <div class="text-[10px] text-slate-400 font-mono-tech mt-1">Zukunftssicher Heizen</div>
                            </div>
                            <div class="mt-4 pt-2 border-t border-brand-border/60">
                                <div class="text-[10px] text-slate-400 uppercase font-mono-tech">Max. Förderung:</div>
                                <div class="text-xs font-mono-tech font-bold text-brand-green">Bis zu 21.000 €</div>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Dezenter Mehrwert des Energieberaters -->
                <div class="p-4 rounded-xl bg-brand-navy/80 border border-brand-border space-y-2 mt-4">
                    <div class="flex items-center gap-2 text-xs font-mono-tech text-brand-green font-bold">
                        <i class="fa-solid fa-shield-halved"></i> Der zertifizierte Energieberater-Mehrwert
                    </div>
                    <p class="text-[11px] text-slate-400 font-mono-tech leading-relaxed">
                        <strong class="text-slate-200">Immer Ihr klarer Vorteil</strong>: Als gelisteter Experte schalte ich für Sie den <strong class="text-brand-green">+5% iSFP-Bonus</strong> frei, verdopple die förderfähigen Höchstgrenzen und kümmere mich um die rechtssichere Abwicklung bei BAFA und KfW.
                    </p>
                </div>
            </div>

            <!-- Rechte Spalte: Die große Grüne Zahl -->
            <div class="lg:col-span-5 bg-brand-navy/90 border border-brand-border rounded-xl p-6 sm:p-8 flex flex-col justify-between space-y-6 shadow-inner">
                <div class="flex justify-between items-center border-b border-brand-border pb-4">
                    <span class="text-xs font-mono-tech text-slate-400 uppercase tracking-wider">Mögliche Förder-Ersparnis</span>
                    <span id="label-project-name" class="text-xs font-mono-tech px-2.5 py-1 rounded bg-brand-slate text-brand-green border border-brand-border font-bold">iSFP-Energieberatung</span>
                </div>

                <!-- Haupt-Eyecatcher: Eingesparte Summe -->
                <div class="text-center py-6 bg-brand-green/5 border border-brand-green/20 rounded-xl space-y-2 shadow-sm">
                    <div class="text-[11px] uppercase tracking-wider font-mono-tech text-brand-green font-bold">Möglicher Zuschuss vom Staat</div>
                    <div id="val-zuschuss-big" class="text-3xl sm:text-4xl font-extrabold text-brand-green font-mono-tech">
                        bis zu 650,00 €
                    </div>
                    <div id="val-quote-desc" class="text-[11px] text-slate-300 font-mono-tech px-3">
                        Direct-Zuschuss (50% der Honorarkosten durch BAFA gefördert)
                    </div>
                </div>

                <!-- Detail-Highlights ohne erfundene Preise -->
                <div class="space-y-2.5 text-xs font-mono-tech">
                    <div class="flex justify-between text-slate-400 pb-1.5 border-b border-brand-border/40">
                        <span>Max. Förderquote:</span>
                        <span id="val-quote-max" class="text-brand-green font-bold">50 %</span>
                    </div>
                    <div class="flex justify-between text-slate-400">
                        <span>Zusatz-Vorteil:</span>
                        <span id="val-extra-advantage" class="text-slate-200">Schaltet +5% Bonus frei</span>
                    </div>
                </div>

                <a href="#kontakt" class="w-full py-3.5 text-xs font-mono-tech font-bold uppercase tracking-wider text-center text-white bg-brand-crimson hover:bg-rose-700 rounded-lg transition-colors block shadow-lg shadow-rose-950/40">
                    Jetzt Förderung sichern &amp; anfragen <i class="fa-solid fa-arrow-right ml-1"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Script für die Live-Umschaltung -->
<script>
    function setProject(type) {
        const btnIsfp = document.getElementById('btn-isfp');
        const btnMassnahmen = document.getElementById('btn-massnahmen');
        const btnWaermepumpe = document.getElementById('btn-waermepumpe');
        
        const labelName = document.getElementById('label-project-name');
        const valZuschussBig = document.getElementById('val-zuschuss-big');
        const valQuoteDesc = document.getElementById('val-quote-desc');
        const valQuoteMax = document.getElementById('val-quote-max');
        const valExtraAdvantage = document.getElementById('val-extra-advantage');

        // Standard Button Style zurücksetzen
        const inactiveStyle = "project-btn text-left p-4 rounded-xl border border-brand-border bg-brand-navy/60 hover:border-slate-500 transition-all group flex flex-col justify-between";
        const activeStyle = "project-btn text-left p-4 rounded-xl border border-brand-green bg-brand-green/10 transition-all group relative overflow-hidden flex flex-col justify-between";

        btnIsfp.className = inactiveStyle;
        btnMassnahmen.className = inactiveStyle;
        btnWaermepumpe.className = inactiveStyle;

        if (type === 'isfp') {
            labelName.innerText = 'iSFP-Energieberatung';
            valZuschussBig.innerText = 'bis zu 650,00 €';
            valQuoteDesc.innerText = 'Direkter BAFA-Zuschuss für das Erstellen Ihres Sanierungsfahrplans';
            valQuoteMax.innerText = '50 %';
            valExtraAdvantage.innerText = 'Schaltet +5% Bonus für 15 Jahre frei';
            btnIsfp.className = activeStyle;
        } else if (type === 'massnahmen') {
            labelName.innerText = 'Einzelmaßnahmen (z.B. Dämmung)';
            valZuschussBig.innerText = 'bis zu 10.500,00 € / Jahr';
            valQuoteDesc.innerText = 'Basierend auf max. 60.000 € förderfähigen Kosten pro Jahr mit iSFP-Bonus';
            valQuoteMax.innerText = 'bis zu 20 % (+10% WPB)';
            valExtraAdvantage.innerText = 'Inkl. Worst Performing Building Bonus möglich';
            btnMassnahmen.className = activeStyle;
        } else {
            labelName.innerText = 'Wärmepumpen-Tausch';
            valZuschussBig.innerText = 'bis zu 21.000,00 €';
            valQuoteDesc.innerText = 'Höchstförderung (70%) auf max. 30.000 € förderfähige Kosten laut KfW-Richtlinie';
            valQuoteMax.innerText = 'bis zu 70 %';
            valExtraAdvantage.innerText = 'Inkl. Klima- & Einkommensbonus';
            btnWaermepumpe.className = activeStyle;
        }
    }
</script>
