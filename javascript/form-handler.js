document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('email-form');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const btn = form.querySelector('button');
    const origText = btn.textContent;
    btn.disabled = true;
    btn.textContent = 'Sending...';
    
    try {
      const res = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: { 'Accept': 'application/json' }
      });
      
      if (res.ok) {
        form.parentElement.innerHTML = `
          <div class="bg-black border border-[#333333] rounded-xl p-6 shadow-lg text-center">
            <svg class="w-8 h-8 mx-auto text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <h3 class="text-white text-lg font-semibold mb-2">Success!</h3>
            <p class="text-neutral-400">Thanks for subscribing. We'll notify you when our new site launches.</p>
          </div>`;
      } else throw new Error();
    } catch {
      btn.disabled = false;
      btn.textContent = origText;
      alert('Something went wrong. Please try again.');
    }
  });
});