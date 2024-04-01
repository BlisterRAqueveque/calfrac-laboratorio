const iconThemeMode = document.getElementById("iconThemeMode");

document.addEventListener("DOMContentLoaded", (e) => {
  if (localStorage.getItem("darkmode")) {
    let style = document.createElement("style");
    style.classList.add('scroll_style');
    // Agregar los estilos
    style.textContent = `
        ::-webkit-scrollbar {
            width: 10px;
        }
    
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
    
        ::-webkit-scrollbar-thumb {
            background: #888;
        }
    
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    `;

    
    document.getElementById("html").classList.add("dark");
    iconThemeMode.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
    </svg>`;
    document.head.appendChild(style);
  } else {
    let styleElement = document.querySelector(".scroll_style");
    if (styleElement) {
      styleElement.remove();
    }

    document.getElementById("html").classList.remove("dark");
    iconThemeMode.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>
            `;
  }
  document.getElementById("html").classList.remove("loading");
});

const btnToggleTheme = document.getElementById("toggleTheme");
btnToggleTheme.addEventListener("click", (e) => {
  if (localStorage.getItem("darkmode")) {

    let style = document.querySelector(".scroll_style");
    if (style) {
      style.remove();
    }

    document.getElementById("html").classList.remove("dark");
    localStorage.removeItem("darkmode");
    iconThemeMode.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
        `;
  } else {
    let style = document.createElement("style");
    style.classList.add('scroll_style');

    // Agregar los estilos
    style.textContent = `
        ::-webkit-scrollbar {
            width: 10px;
        }
    
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
    
        ::-webkit-scrollbar-thumb {
            background: #888;
        }
    
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    `;
    
    localStorage.setItem("darkmode", true);
    document.getElementById("html").classList.add("dark");
    iconThemeMode.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
    </svg>`;
    document.head.appendChild(style);
  }
});
