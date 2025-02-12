import { createLogo } from './Logo';
import { createSocialIcon } from './SocialIcons';

export function createFooter() {
  return `
    <footer class="footer">
      <div class="container">
        <div class="footer-content">
          <div class="footer-brand">
            <a href="/" class="footer-logo">
              ${createLogo('#ffffff')}
              <span>doorillio</span>
            </a>
            <p>Empowering your journey to better living through expert insights and practical guidance.</p>
            <div class="social-links">
              <a href="#" class="social-link" aria-label="Twitter">
                ${createSocialIcon('twitter')}
              </a>
              <a href="#" class="social-link" aria-label="LinkedIn">
                ${createSocialIcon('linkedin')}
              </a>
              <a href="#" class="social-link" aria-label="Medium">
                ${createSocialIcon('medium')}
              </a>
              <a href="#" class="social-link" aria-label="Facebook">
                ${createSocialIcon('facebook')}
              </a>
            </div>
          </div>
          
          <div class="footer-links">
            <div class="footer-section">
              <h3>Quick Links</h3>
              <ul>
                <li><a href="/articles">Latest Articles</a></li>
                <li><a href="/guides">Health Guides</a></li>
                <li><a href="/expert-advice">Expert Advice</a></li>
                <li><a href="/community">Community</a></li>
              </ul>
            </div>
            
            <div class="footer-section">
              <h3>Categories</h3>
              <ul>
                <li><a href="/nutrition">Nutrition</a></li>
                <li><a href="/fitness">Fitness</a></li>
                <li><a href="/mental-health">Mental Health</a></li>
                <li><a href="/wellness">Wellness</a></li>
              </ul>
            </div>
            
            <div class="footer-section">
              <h3>Company</h3>
              <ul>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/careers">Careers</a></li>
                <li><a href="/press">Press Kit</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="footer-bottom">
          <p>© ${new Date().getFullYear()} doorillio. All rights reserved.</p>
          <div class="legal-links">
            <a href="/privacy">Privacy Policy</a>
            <a href="/terms">Terms of Service</a>
            <a href="/cookie-policy">Cookie Policy</a>
          </div>
        </div>
      </div>
    </footer>
  `;
}
