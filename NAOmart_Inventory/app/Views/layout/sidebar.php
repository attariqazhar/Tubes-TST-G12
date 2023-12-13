<div class="dark:text-white">
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#123D6A]">
      <div class="flex flex-col justify-center items-center font-josefin pt-[30px]">
        <a class="text-[40px]">NAOmart</a>
        <a>Inventory Management</a>
      </div>

      <ul class="space-y-4 font-medium mt-10">
        <li>
          <a href="/profile" class="flex items-center p-2 rounded-lg hover:bg-[#0E3156] group">
            
            <img src="https://cdn.iconscout.com/icon/free/png-256/free-avatar-370-456322.png?f=webp" width="40" height="40" />

            <span class="ms-3"><?php echo (session("name"));?></span>
          </a>
        </li>
        <li>
          <a href="/" class="flex items-center p-2 rounded-lg  hover:bg-[#0E3156] group">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_2342_4797)">
            <path d="M7.47 6.90002C7.32167 6.96443 7.1617 6.99766 7 6.99766C6.83829 6.99766 6.67832 6.96443 6.53 6.90002L0.829996 4.26002C0.737437 4.21334 0.659654 4.14188 0.605308 4.0536C0.550962 3.96532 0.522186 3.86369 0.522186 3.76002C0.522186 3.65636 0.550962 3.55472 0.605308 3.46645C0.659654 3.37817 0.737437 3.30671 0.829996 3.26002L6.53 0.600022C6.67832 0.535615 6.83829 0.50238 7 0.50238C7.1617 0.50238 7.32167 0.535615 7.47 0.600022L13.17 3.24002C13.2626 3.28671 13.3403 3.35817 13.3947 3.44645C13.449 3.53472 13.4778 3.63636 13.4778 3.74002C13.4778 3.84369 13.449 3.94532 13.3947 4.0336C13.3403 4.12188 13.2626 4.19334 13.17 4.24002L7.47 6.90002Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.5 7.35004L7.4 10.16C7.26972 10.2195 7.12819 10.2502 6.985 10.2502C6.84181 10.2502 6.70028 10.2195 6.57 10.16L0.5 7.35004" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.5 10.6L7.4 13.41C7.26972 13.4695 7.12819 13.5002 6.985 13.5002C6.84181 13.5002 6.70028 13.4695 6.57 13.41L0.5 10.6" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <defs>
            <clipPath id="clip0_2342_4797">
            <rect width="14" height="14" fill="white"/>
            </clipPath>
            </defs>
            </svg>


            <span class="ms-3">Dashboard</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
</div>

