export function createHeader() {
  return `
    <header class="header">
      <div class="container header-content">
        <a href="/" class="logo">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          DoodOne
        </a>
        <nav class="nav-menu">
          <a href="#" class="nav-link">Home</a>
          <a href="#" class="nav-link">Nutrition</a>
          <a href="#" class="nav-link">Fitness</a>
          <a href="#" class="nav-link">Mental Health</a>
          <a href="#" class="nav-link">Wellness</a>
        </nav>
      </div>
    </header>
  `
}
