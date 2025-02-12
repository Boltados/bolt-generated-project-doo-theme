export function createNewsletter() {
  return `
    <section class="newsletter">
      <div class="container">
        <div class="newsletter-content">
          <h2>Get Health Tips in Your Inbox</h2>
          <p>Join 50,000+ subscribers who receive our weekly health insights.</p>
          <form class="newsletter-form">
            <input type="email" placeholder="Your email address" required>
            <button type="submit">Subscribe</button>
          </form>
          <small>No spam. Unsubscribe anytime.</small>
        </div>
      </div>
    </section>
  `;
}
