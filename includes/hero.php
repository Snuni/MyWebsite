<?php
// includes/hero.php
?>
<style>
/* Hero Section Styling */
.hero-section {
  color: #f3f4f6;
  padding: 40px 20px 60px 20px;
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
}

.hero-container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Hero Grid Layout */
.hero-grid {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: 40px;
  align-items: center;
  margin-bottom: 40px;
}

/* Text Content */
.badge-status {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(30, 41, 59, 0.7);
  border: 1px solid rgba(255, 255, 255, 0.1);
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.85rem;
  color: #94a3b8;
  margin-bottom: 20px;
}

.status-dot {
  width: 8px;
  height: 8px;
  background-color: #10b981;
  border-radius: 50%;
  box-shadow: 0 0 8px #10b981;
}

.hero-title {
  font-size: 2.6rem;
  font-weight: 800;
  line-height: 1.15;
  letter-spacing: -0.02em;
  margin-bottom: 16px;
  color: #ffffff;
}

.highlight-text {
  color: #3b82f6;
}

.hero-subtitle {
  font-size: 1.05rem;
  color: #9ca3af;
  margin-bottom: 24px;
}

/* Mini Service Cards */
.service-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
  margin-bottom: 20px;
}

.service-mini-card {
  background: rgba(30, 41, 59, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 8px;
  padding: 12px 10px;
  text-align: center;
  font-size: 0.8rem;
  color: #e2e8f0;
  font-weight: 500;
}

.hero-description {
  font-size: 0.95rem;
  color: #94a3b8;
  line-height: 1.5;
  margin-bottom: 28px;
}

/* Buttons */
.hero-actions {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
}

.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.2s ease;
  font-size: 0.95rem;
}

.btn-primary {
  background-color: #3b82f6;
  color: #ffffff;
  box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
}

.btn-primary:hover {
  background-color: #2563eb;
}

.btn-secondary {
  background-color: rgba(30, 41, 59, 0.8);
  color: #34d399;
  border: 1px solid rgba(52, 211, 153, 0.2);
}

.btn-secondary:hover {
  background-color: rgba(30, 41, 59, 1);
}

/* Right Column Image Frame */
.hero-image-wrapper {
  position: relative;
}

.image-frame {
  position: relative;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.1);
  min-height: 320px;
  background: rgba(15, 23, 42, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.image-fallback {
  color: #64748b;
  font-size: 0.9rem;
  text-align: center;
  padding: 20px;
}

/* Quality Banner Bottom */
.quality-banner {
  background: rgba(15, 23, 42, 0.7);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  padding: 20px;
}

.quality-header {
  display: flex;
  justify-content: space-between;
  font-size: 0.75rem;
  letter-spacing: 0.1em;
  color: #64748b;
  margin-bottom: 10px;
  font-weight: 700;
}

.quality-details {
  display: flex;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
  font-size: 0.85rem;
}

.quality-item .label {
  color: #64748b;
  margin-right: 6px;
}

.quality-item .value {
  color: #f1f5f9;
  font-weight: 600;
}

.quality-item .value.highlight {
  color: #34d399;
}

.quality-divider {
  color: #334155;
}

/* Responsive adjustments */
@media (max-width: 900px) {
  .hero-grid {
    grid-template-columns: 1fr;
  }
  
  .quality-divider {
    display: none;
  }
  
  .quality-details {
    flex-direction: column;
    align-items: flex-start;
    gap: 6px;
  }
}
</style>

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

      <!-- Rechte Spalte: Key Visual (Greift auf dein vorhandenes img/ Verzeichnis zu) -->
      <div class="hero-image-wrapper">
        <div class="image-frame">
          <img src="img/logo.png" alt="Ingenieurbüro Idrizi" class="hero-img" style="object-fit: contain; padding: 40px;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
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
