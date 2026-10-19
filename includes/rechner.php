<!-- Kreativer Förder- & Wertschöpfungsrechner -->
    <section id="rechner" class="py-20 border-b border-brand-border/40 bg-slate-950/40 relative overflow-hidden">
        <!-- Dezenter Glow im Hintergrund -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand-green/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-green/10 border border-brand-green/30 text-xs font-mono-tech text-brand-green">
                    <i class="fa-solid fa-wand-magic-sparkles"></i> Interaktive Förder-Visualisierung
                </div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">Ihr bares Geld: Vom Staat gesponsert.</h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto font-light">
                    Erleben Sie, wie stark staatliche Zuschüsse Ihre Eigenleistung reduzieren – exakt berechnet nach aktueller BAFA-Richtlinie.
                </p>
            </div>

            <div class="grid lg:grid-cols-12 gap-8 items-center bg-brand-slate/40 border border-brand-border rounded-2xl p-6 sm:p-10 backdrop-blur-md shadow-2xl">
                
                <!-- Linke Spalte: Interaktive Projekt-Auswahl (Kacheln statt Dropdown) -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="text-xs font-mono-tech text-slate-400 uppercase tracking-wider">1. Wählen Sie Ihr Vorhaben:</div>
                    
                    <div class="grid sm:grid-cols-2 gap-4" id="project-options">
                        <!-- Option 1: iSFP -->
                        <button type="button" onclick="setProject('isfp')" id="btn-isfp" class="project-btn text-left p-4 rounded-xl border border-brand-crimson bg-brand-crimson/10 transition-all group relative overflow-hidden">
                            <div class="flex justify-between items-start mb-2">
                                <span class="w-8 h-8 rounded bg-brand-navy border border-brand-border flex items-center justify-center text-brand-crimson font-mono-tech text-xs">01</span>
                                <i class="fa-solid fa-file-invoice-dollar text-brand-crimson text-lg"></i>
                            </div>
                            <div class="font-bold text-white text-sm group-hover:text-brand-crimson transition-colors">iSFP-Energieberatung</div>
                            <div class="text-[11px] text-slate-400 font-mono-tech mt-1">Der Masterplan fürs Haus</div>
                            <div class="mt-3 text-xs font-mono-tech font-bold text-brand-green">Bis zu 650 € Zuschuss</div>
                        </button>

                        <!-- Option 2: Heizlast -->
                        <button type="button" onclick="setProject('heizlast')" id="btn-heizlast" class="project-btn text-left p-4 rounded-xl border border-brand-border bg-brand-navy/60 hover:border-slate-500 transition-all group">
                            <div class="flex justify-between items-start mb-2">
                                <span class="w-8 h-8 rounded bg-brand-navy border border-brand-border flex items-center justify-center text-slate-400 font-mono-tech text-xs">02</span>
                                <i class="fa-solid fa-temperature-arrow-down text-brand-blue text-lg"></i>
                            </div>
                            <div class="font-bold text-white text-sm group-hover:text-brand-blue transition-colors">Heizlastberechnung</div>
                            <div class="text-[11px] text-slate-400 font-mono-tech mt-1">Normgerecht nach DIN 12831</div>
                            <div class="mt-3 text-xs font-mono-tech font-bold text-brand-green">50% BAFA-förderfähig</div>
                        </button>
                    </div>

                    <!-- Zusatz-Feature / Experten-Hebeleffekt -->
                    <div class="p-4 rounded-xl bg-brand-navy/80 border border-brand-border space-y-2">
                        <div class="flex items-center gap-2 text-xs font-mono-tech text-brand-green font-bold">
                            <i class="fa-solid fa-shield-halved"></i> Der Ingenieur-Hebeleffekt
                        </div>
                        <p class="text-[11px] text-slate-400 font-mono-tech leading-relaxed">
                            Durch meine Listung als BAFA-Energie-Effizienz-Experte holen wir maximal geförderte Honorare heraus und sichern Ihnen den iSFP-Bonus bei späteren Sanierungen (+5% Förder-Boost).
                        </p>
                    </div>
                </div>

                <!-- Rechte Spalte: Visuelles Kuchendiagramm (Donut) & Live-Kalkulation -->
                <div class="lg:col-span-6 bg-brand-navy/90 border border-brand-border rounded-xl p-6 sm:p-8 flex flex-col justify-between space-y-6 shadow-inner">
                    <div class="flex justify-between items-center border-b border-brand-border pb-4">
                        <span class="text-xs font-mono-tech text-slate-400 uppercase tracking-wider">Kosten- &amp; Förderbilanz</span>
                        <span id="label-project-name" class="text-xs font-mono-tech px-2 py-1 rounded bg-brand-slate text-brand-green border border-brand-border">iSFP-Paket</span>
                    </div>

                    <!-- Visueller Chart Container -->
                    <div class="flex flex-col sm:flex-row items-center justify-around gap-6 py-2">
                        <!-- SVG Donut Chart -->
                        <div class="relative w-36 h-36 flex items-center justify-center">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                                <!-- Hintergrund Kreis (Gesamtkosten Brutto) -->
                                <path class="text-brand-slate" stroke-width="4" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <!-- Förderungs-Anteil (Grün) -->
                                <path id="chart-progress" class="text-brand-green transition-all duration-700 ease-out" stroke-dasharray="65, 100" stroke-width="4" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            </svg>
                            <div class="absolute text-center">
                                <div id="stat-percent" class="text-xl font-extrabold text-brand-green font-mono-tech">65%</div>
                                <div class="text-[9px] uppercase tracking-wider text-slate-400 font-mono-tech">Förderquote</div>
                            </div>
                        </div>

                        <!-- Aufschlüsselung Text -->
                        <div class="space-y-2 text-xs font-mono-tech w-full sm:w-auto">
                            <div class="flex justify-between sm:justify-start sm:gap-6 text-slate-400">
                                <span class="w-24">Honorar (Netto):</span>
                                <span id="val-netto" class="text-white font-bold">1.900,00 €</span>
                            </div>
                            <div class="flex justify-between sm:justify-start sm:gap-6 text-slate-400">
                                <span class="w-24">Inkl. 19% MwSt:</span>
                                <span id="val-brutto" class="text-slate-300">2.261,00 €</span>
                            </div>
                            <div class="flex justify-between sm:justify-start sm:gap-6 text-brand-green font-bold">
                                <span class="w-24">Staatl. Zuschuss:</span>
                                <span id="val-zuschuss">- 850,00 €</span>
                            </div>
                        </div>
                    </div>

                    <!-- Endergebnis / Netto-Investition für den Kunden -->
                    <div class="pt-4 border-t border-brand-border flex justify-between items-center bg-brand-slate/30 p-4 rounded-lg">
                        <div>
                            <div class="text-[10px] uppercase font-mono-tech text-slate-400">Ihr effektiver Eigenanteil:</div>
                            <div class="text-[11px] text-brand-green font-mono-tech">Inklusive fachgerechter BAFA-Abwicklung</div>
                        </div>
                        <div id="val-eigenanteil" class="text-2xl font-extrabold text-white font-mono-tech">
                            1.411,00 €
                        </div>
                    </div>

                    <a href="#kontakt" class="w-full py-3 text-xs font-mono-tech font-bold uppercase tracking-wider text-center text-white bg-brand-crimson hover:bg-rose-700 rounded-lg transition-colors block shadow-lg shadow-rose-950/40">
                        Jetzt Fördermittel sichern &amp; anfragen <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Script für die kreative Live-Berechnung -->
    <script>
        function setProject(type) {
            // UI Buttons umschalten
            const btnIsfp = document.getElementById('btn-isfp');
            const btnHeizlast = document.getElementById('btn-heizlast');
            const labelName = document.getElementById('label-project-name');
            const chartProgress = document.getElementById('chart-progress');
            const statPercent = document.getElementById('stat-percent');
            
            const valNetto = document.getElementById('val-netto');
            const valBrutto = document.getElementById('val-brutto');
            const valZuschuss = document.getElementById('val-zuschuss');
            const valEigenanteil = document.getElementById('val-eigenanteil');

            let netto, zuschuss, name, percentStroke, percentText;

            if (type === 'isfp') {
                netto = 1900;
                zuschuss = 850; // Inklusive iSFP und möglicher Bonus-Kombination
                name = 'iSFP-Paket';
                percentStroke = '55'; // SVG Dasharray value roughly proportional
                percentText = 'ca. 40%';
                
                btnIsfp.className = "project-btn text-left p-4 rounded-xl border border-brand-crimson bg-brand-crimson/10 transition-all group relative overflow-hidden";
                btnHeizlast.className = "project-btn text-left p-4 rounded-xl border border-brand-border bg-brand-navy/60 hover:border-slate-500 transition-all group";
            } else {
                netto = 950;
                zuschuss = 475; // 50% BAFA
                name = 'Heizlastberechnung';
                percentStroke = '50';
                percentText = '50%';

                btnHeizlast.className = "project-btn text-left p-4 rounded-xl border border-brand-blue bg-brand-blue/10 transition-all group relative overflow-hidden";
                btnIsfp.className = "project-btn text-left p-4 rounded-xl border border-brand-border bg-brand-navy/60 hover:border-slate-500 transition-all group";
            }

            const brutto = netto * 1.19;
            const eigenanteil = Math.max(0, brutto - zuschuss);

            labelName.innerText = name;
            chartProgress.setAttribute('stroke-dasharray', `${percentStroke}, 100`);
            statPercent.innerText = percentText;

            valNetto.innerText = netto.toFixed(2).replace('.', ',') + ' €';
            valBrutto.innerText = brutto.toFixed(2).replace('.', ',') + ' €';
            valZuschuss.innerText = '- ' + zuschuss.toFixed(2).replace('.', ',') + ' €';
            valEigenanteil.innerText = eigenanteil.toFixed(2).replace('.', ',') + ' €';
        }
    </script>
