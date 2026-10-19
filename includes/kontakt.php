<!-- Contact Form Section -->
    <section id="kontakt" class="py-20 border-b border-brand-border/40">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-2">
                <div class="text-xs font-mono-tech text-brand-blue uppercase">Projektanfrage</div>
                <h2 class="text-2xl sm:text-3xl font-bold text-white">Starten Sie Ihr Sanierungsvorhaben</h2>
                <p class="text-slate-400 text-sm">Senden Sie uns Ihre Daten für eine unverbindliche Ersteinschätzung.</p>
            </div>

            <div class="bg-brand-slate/60 border border-brand-border rounded-lg p-6 sm:p-8">

                <!-- Notice if redirected after sending -->
                <script>
                    if (window.location.search.includes('gesendet=success')) {
                        document.write('<div class="mb-6 p-4 bg-emerald-950/80 border border-emerald-500/50 rounded text-emerald-200 text-xs font-mono-tech text-center"><i class="fa-solid fa-circle-check mr-2"></i>Vielen Dank! Ihre Anfrage wurde erfolgreich übermittelt. Wir melden uns umgehend bei Ihnen.</div>');
                    }
                </script>

                <!-- PHP Compatible Form -->
                <form action="send.php" method="POST" class="space-y-4 text-xs font-mono-tech">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-slate-400 mb-1">Vor- &amp; Nachname *</label>
                            <input type="text" name="name" required class="w-full bg-brand-navy border border-brand-border rounded px-3 py-2 text-white focus:outline-none focus:border-brand-crimson">
                        </div>
                        <div>
                            <label class="block text-slate-400 mb-1">E-Mail-Adresse *</label>
                            <input type="email" name="email" required class="w-full bg-brand-navy border border-brand-border rounded px-3 py-2 text-white focus:outline-none focus:border-brand-crimson">
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-slate-400 mb-1">Telefonnummer</label>
                            <input type="tel" name="telefon" class="w-full bg-brand-navy border border-brand-border rounded px-3 py-2 text-white focus:outline-none focus:border-brand-crimson">
                        </div>
                        <div>
                            <label class="block text-slate-400 mb-1">Gewünschte Leistung</label>
                            <select name="leistung" class="w-full bg-brand-navy border border-brand-border rounded px-3 py-2 text-white focus:outline-none focus:border-brand-crimson">
                                <option value="Heizlastberechnung">Raumweise Heizlastberechnung</option>
                                <option value="iSFP Energieberatung">iSFP Energieberatung</option>
                                <option value="Förderantragstellung">Förderantragstellung BAFA / KfW</option>
                                <option value="Gesamtanfrage">Gesamtanfrage / Sonstiges</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-slate-400 mb-1">Details zum Objekt / Ihr Anliegen</label>
                        <textarea name="nachricht" rows="4" required class="w-full bg-brand-navy border border-brand-border rounded px-3 py-2 text-white focus:outline-none focus:border-brand-crimson" placeholder="z. B. Einfamilienhaus in Weil der Stadt, Baujahr 1985, geplanter Wärmepumpentausch..."></textarea>
                    </div>

                    <div class="pt-2 flex justify-between items-center">
                        <span class="text-slate-500 text-[10px]">Ihre Daten werden vertraulich behandelt.</span>
                        <button type="submit" class="px-6 py-3 font-semibold text-white bg-brand-crimson hover:bg-rose-700 rounded transition-colors flex items-center gap-2">
                            Anfrage jetzt absenden
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
