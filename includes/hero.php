<?php
// includes/hero.php
?>
<!-- Einbindung des spezifischen CSS für den Hero-Bereich -->
<link rel="stylesheet" href="includes/hero.css">

<section class="hero-section">
  <div class="hero-container">
    
    <!-- Main Hero Grid -->
    <div class="hero-grid">
      
      <!-- Linke Spalte: Headline, Badges & Content -->
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
          <div class="service-card">
            <h3>Individueller Sanierungsfahrplan (iSFP)</h3>
          </div>
          <div class="service-card">
            <h3>Raumweise Heizlastberechnung & Hydraulischer Abgleich</h3>
          </div>
          <div class="service-card">
            <h3>Förderantragstellung BAFA / KfW</h3>
          </div>
        </div>

        <p class="hero-description">
          Vermeiden Sie Fehldimensionierungen bei Wärmepumpen. Sichern Sie sich 
          <strong>bis zu 80% Zuschuss</strong> mit unserer Expertise in CAD / Hottgenroth Simulation nach DIN-Normen.
        </p>

        <!-- Call to Action Buttons -->
        <div class="hero-actions">
          <a href="#kontakt" class="btn btn-primary">
            Erstgespräch vereinbaren 
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          
          <a href="#rechner" class="btn btn-secondary">
            <svg class="btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="4" y="2" width="16" height="20" rx="2"/>
              <line x1="8" y1="6" x2="16" y2="6"/>
              <line x1="16" y1="14" x2="16" y2="18"/>
              <path d="M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M8 18h.01M12 18h.01"/>
            </svg>
            Förderrechner
          </a>
        </div>
      </div>

      <!-- Rechte Spalte: Key Visual Image (Greift auf den Haupt-Ordner 'img/' zu) -->
      <div class="hero-image-wrapper">
        <div class="image-frame">
          <img src="img/waermepumpe.jpg" alt="Moderne Wärmepumpen-Installation" class="hero-img">
          <div class="image-overlay-glow"></div>
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

      <p class="quality-note">Sichern Sie sich volle Fördermittel für Ihre Wärmepumpe.</p>
    </div>

  </div>
</section>
