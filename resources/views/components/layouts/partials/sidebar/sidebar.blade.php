<nav x-data x-bind:class="$store.sidebarState.isActive ? 'translate-x-0 show' : '-translate-x-72 hide'" class="bg-white shadow-lg w-[80%] sm:w-60 fixed top-0 bottom-0 transition-all sm:show sm:translate-x-0 pt-16">
  {{ $slot }}
</nav>
