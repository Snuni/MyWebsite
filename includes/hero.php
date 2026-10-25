<?php
// includes/hero.php
?>
<section class="hero-section">
  <div class="hero-container">
    
    <!-- Main Hero Grid -->
    <div class="hero-grid">
      
      <!-- Linke Spalte: Headline & Badges -->
      <div class="hero-text-content">
        <div class="badge-status">
          <span class="status-dot"></span>
          Zertifizierter Energie-Effizienz-Experte (BAFA / KfW)
        </div>

        <h1 class="hero-title">
          Energie-Experte<br>
          für Ihre Sanierung.<br>
          <span class="highlight-text">Zukunftssicher. Normgerecht.</span>
        </h1>

        <p class="hero-subtitle">
          Ingenieurs-Leistungen von M.Sc. Ingenieur Idrizi in Weil der Stadt und Region.
        </p>

        <!-- Service Badge Grid -->
        <div class="service-cards-grid">
          <div class="service-mini-card">
            <span>iSFP & Sanierung</span>
          </div>
          <div class="service-mini-card">
            <span>Heizlast & Abgleich</span>
          </div>
          <div class="service-mini-card">
            <span>BAFA / KfW Anträge</span>
          </div>
        </div>

        <p class="hero-description">
          Vermeiden Sie Fehldimensionierungen bei Wärmepumpen. Sichern Sie sich 
          <strong>bis zu 80% Zuschuss</strong> mit unserer Expertise in CAD / Hottgenroth Simulation nach DIN-Normen.
        </p>

        <!-- Call to Action Buttons -->
        <div class="hero-actions">
          <a href="#kontakt" class="btn btn-primary">
            Erstgespräch vereinbaren &rarr;
          </a>
          <a href="#rechner" class="btn btn-secondary">
            Förderrechner
          </a>
        </div>
      </div>

      <!-- Rechte Spalte: Key Visual (Bild oder Grafik) -->
      <div class="hero-image-wrapper">
        <div class="image-frame">
          <img src="img/waermepumpe.jpg" alt="Moderne Wärmepumpe" class="hero-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
          <!-- Fallback, falls das Bild noch nicht hochgeladen ist -->
          <div class="image-fallback" style="display:none;">
            <span>[ Wärmepumpen-Visual / CAD Simulation ]</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Qualitätsversprechen Banner -->
    <div class="quality-banner">
      <div class="quality-header">
        <span class="quality-title">UNSER QUALITÄTSVERSPRECHEN</span>
        <span class="quality-location">WEIL DER STADT</span>
      </div>
      
      <div class="quality-details">
        <div class="quality-item">
          <span class="label">QUALIFIKATION:</span>
          <span class="value">M.Sc. Ingenieur</span>
        </div>
        <div class="quality-divider">|</div>
        <div class="quality-item">
          <span class="label">SIMULATION:</span>
          <span class="value">Hottgenroth</span>
        </div>
        <div class="quality-divider">|</div>
        <div class="quality-item">
          <span class="label">NORMEN:</span>
          <span class="value">DIN EN 12831 / DIN V 18599</span>
        </div>
        <div class="quality-divider">|</div>
        <div class="quality-item">
          <span class="label">FÖRDERUNG:</span>
          <span class="value highlight">Bis zu 50% – 80% Zuschuss</span>
        </div>
      </div>
    </div>

  </div>
</section>
