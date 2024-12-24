<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 border-b-4" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="?page=accueil" class="-m-1.5 p-1.5">
        <span class="sr-only">OGM 2.0</span>
        <img class="h-8 w-auto" src="images/logo_site_controverse_resized.png" alt="">
      </a>
    </div>
    <div class="lg:flex lg:gap-x-12 p-8">
      <a href="?page=actualites" class="text-sm/6 font-semibold text-gray-900">Actualités</a>
      <div class="relative">
        <button type="button" onclick="toggleSubMenu()" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
          Rapport
          <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </button>
        <div id="submenu" class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
          <div class="p-4">
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <img class="size-6 text-gray-600 group-hover:text-indigo-600" src="images/summary_icon.svg" alt="">
              </div>
              <div class="flex-auto">
                <a href="?page=sommaire" class="block font-semibold text-gray-900">
                  Sommaire
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Accéder au sommaire de notre rapport</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <img class="size-6 text-gray-600 group-hover:text-indigo-600" src="images/bibliography_icon.svg" alt="">
              </div>
              <div class="flex-auto">
                <a href="?page=bibliographie" class="block font-semibold text-gray-900">
                  Bibliographie
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Nos sources à l'origine de notre travail</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <img class="size-6 text-gray-600 group-hover:text-indigo-600" src="images/download_icon.svg" alt="">
              </div>
              <div class="flex-auto">
                <a href="?page=version_complete" class="block font-semibold text-gray-900">
                  Version complète
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Télécharger la version complète du rapport</p>
              </div>
            </div>
          </div>
          <div class="divide-x divide-gray-900/5 bg-gray-50">
            <a href="?page=teaser" class="flex items-center justify-center gap-x-5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
              <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" />
              </svg>
              Teaser
            </a>
          </div>
        </div>
      </div>

      <a href="?page=podcast" class="text-sm/6 font-semibold text-gray-900">Podcast</a>
      <a href="?page=cartographie" class="text-sm/6 font-semibold text-gray-900">Cartographie</a>
      <a href="?page=about_us" class="text-sm/6 font-semibold text-gray-900">À propos de nous</a>
    </div>
    <div class="flex lg:flex-1 justify-end"></div>
  </nav>
  <script>
        function toggleSubMenu() {
            // Récupère l'élément du sous-menu
            const submenu = document.getElementById('submenu');
            
            // Alterne les classes Tailwind
            if (submenu.classList.contains('hidden')) {
                submenu.classList.remove('hidden'); // Rendre visible
                submenu.classList.add('block');
            } else {
                submenu.classList.remove('block'); // Rendre invisible
                submenu.classList.add('hidden');
            }
        }
    </script>
</header>