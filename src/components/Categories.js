const categories = [
  {
    icon: '🥗',
    title: 'Nutrition',
    description: 'Healthy eating tips and diet advice'
  },
  {
    icon: '💪',
    title: 'Fitness',
    description: 'Workouts and exercise guides'
  },
  {
    icon: '🧠',
    title: 'Mental Health',
    description: 'Tips for emotional well-being'
  },
  {
    icon: '🌿',
    title: 'Wellness',
    description: 'Holistic health and lifestyle'
  }
]

export function createCategories() {
  const categoryCards = categories.map(category => `
    <div class="category-card">
      <div class="category-icon">${category.icon}</div>
      <h3>${category.title}</h3>
      <p>${category.description}</p>
    </div>
  `).join('')

  return `
    <div class="categories">
      ${categoryCards}
    </div>
  `
}
