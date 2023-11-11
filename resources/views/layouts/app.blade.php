<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('components.sidebar')
    @yield('content')
</body>
</html>
//<div class="DATA-GURU content">//
    <div class="overlap-wrapper">
      <div class="overlap">
        <div class="text-wrapper">Data Guru</div>
        <div class="group"><div class="rectangle"></div></div>
        <div class="frame">         
          <div class="div-wrapper"><div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" viewBox="0 0 11 16" fill="none">
              <path d="M10.75 0.33606L3.086 8.00006L10.75 15.6641V0.33606ZM0 1.00006V15.0001H2V1.00006H0ZM8.75 5.16406V10.8361L5.914 8.00006L8.75 5.16406Z" fill="#17A2B8"/>
            </svg>
          </div></div>
          <div class="div-wrapper"><div class="div">1</div></div>
          <div class="div-wrapper"><div class="div">2</div></div>
          <div class="div-wrapper"><div class="div">3</div></div>
          <div class="div-wrapper"><div class="div">4</div></div>
          <div class="div-wrapper"><div class="div">5</div></div>
          <div class="div-wrapper"><div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16" fill="none">
              <path d="M0.75 0.33606L8.414 8.00006L0.75 15.6641V0.33606ZM11.5 1.00006V15.0001H9.5V1.00006H11.5ZM2.75 5.16406V10.8361L5.586 8.00006L2.75 5.16406Z" fill="#17A2B8"/>
            </svg>
          </div></div>
          
        </div>
        <div class="overlap-group">
          <div class="overlap-group-wrapper">
            <div class="overlap-group-2">
              <img class="ellipse" src="img/ellipse-2.png" />
              <div class="mr-susanto">Mr.&nbsp;&nbsp;Susanto</div>
              <div class="frame-2">
                <div class="frame-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M13.07 10.4101C13.6774 9.56132 14.0041 8.54377 14.0041 7.50005C14.0041 6.45634 13.6774 5.43879 13.07 4.59005C13.6385 4.20201 14.3117 3.99622 15 4.00005C15.9283 4.00005 16.8185 4.3688 17.4749 5.02518C18.1313 5.68156 18.5 6.57179 18.5 7.50005C18.5 8.42831 18.1313 9.31855 17.4749 9.97493C16.8185 10.6313 15.9283 11.0001 15 11.0001C14.3117 11.0039 13.6385 10.7981 13.07 10.4101ZM5.5 7.50005C5.5 6.80782 5.70527 6.13113 6.08986 5.55556C6.47444 4.97998 7.02107 4.53138 7.66061 4.26647C8.30015 4.00157 9.00388 3.93226 9.68282 4.0673C10.3617 4.20235 10.9854 4.5357 11.4749 5.02518C11.9644 5.51466 12.2977 6.1383 12.4327 6.81724C12.5678 7.49617 12.4985 8.1999 12.2336 8.83944C11.9687 9.47899 11.5201 10.0256 10.9445 10.4102C10.3689 10.7948 9.69223 11.0001 9 11.0001C8.07174 11.0001 7.1815 10.6313 6.52513 9.97493C5.86875 9.31855 5.5 8.42831 5.5 7.50005ZM7.5 7.50005C7.5 7.79672 7.58797 8.08673 7.7528 8.33341C7.91762 8.58008 8.15189 8.77234 8.42597 8.88587C8.70006 8.9994 9.00166 9.02911 9.29264 8.97123C9.58361 8.91335 9.85088 8.77049 10.0607 8.56071C10.2704 8.35093 10.4133 8.08366 10.4712 7.79269C10.5291 7.50172 10.4994 7.20012 10.3858 6.92603C10.2723 6.65194 10.08 6.41767 9.83335 6.25285C9.58668 6.08803 9.29667 6.00005 9 6.00005C8.60218 6.00005 8.22064 6.15809 7.93934 6.43939C7.65804 6.7207 7.5 7.10223 7.5 7.50005ZM16 17.0001V19.0001H2V17.0001C2 17.0001 2 13.0001 9 13.0001C16 13.0001 16 17.0001 16 17.0001ZM14 17.0001C13.86 16.2201 12.67 15.0001 9 15.0001C5.33 15.0001 4.07 16.3101 4 17.0001M15.95 13.0001C16.5629 13.4768 17.064 14.0819 17.4182 14.7729C17.7723 15.4639 17.9709 16.2241 18 17.0001V19.0001H22V17.0001C22 17.0001 22 13.3701 15.94 13.0001H15.95Z" fill="#EBF7F9"/>
                    </svg>
                  <div class="text-wrapper-2">Data Guru</div>
                </div>
                <div class="frame-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M1.637 1.63696C0.732 1.63696 0 2.36896 0 3.27296V20.727C0 21.631 0.732 22.363 1.637 22.363H22.363C23.268 22.363 24 21.631 24 20.727V3.27296C24 2.36896 23.268 1.63696 22.363 1.63696H1.637ZM2.182 3.81796H21.818V20.182H19.092V19.092H14.182V20.182H2.182V3.81796ZM12 8.18196C11.566 8.18196 11.1497 8.35438 10.8428 8.66128C10.5359 8.96819 10.3635 9.38444 10.3635 9.81846C10.3635 10.2525 10.5359 10.6687 10.8428 10.9756C11.1497 11.2825 11.566 11.455 12 11.455C12.434 11.455 12.8503 11.2825 13.1572 10.9756C13.4641 10.6687 13.6365 10.2525 13.6365 9.81846C13.6365 9.38444 13.4641 8.96819 13.1572 8.66128C12.8503 8.35438 12.434 8.18196 12 8.18196ZM7.637 10.092C6.959 10.092 6.408 10.642 6.408 11.318C6.41712 11.6375 6.55044 11.9408 6.77965 12.1636C7.00886 12.3863 7.31588 12.5109 7.6355 12.5109C7.95512 12.5109 8.26214 12.3863 8.49135 12.1636C8.72056 11.9408 8.85388 11.6375 8.863 11.318C8.863 10.641 8.314 10.092 7.637 10.092ZM16.363 10.092C16.199 10.0873 16.0357 10.1155 15.8828 10.1751C15.7299 10.2346 15.5905 10.3242 15.4728 10.4385C15.3552 10.5529 15.2616 10.6897 15.1978 10.8408C15.1339 10.992 15.101 11.1544 15.101 11.3185C15.101 11.4825 15.1339 11.645 15.1978 11.7961C15.2616 11.9472 15.3552 12.084 15.4728 12.1984C15.5905 12.3127 15.7299 12.4023 15.8828 12.4619C16.0357 12.5214 16.199 12.5496 16.363 12.545C16.6822 12.5358 16.9853 12.4026 17.2079 12.1736C17.4305 11.9446 17.555 11.6378 17.555 11.3185C17.555 10.9991 17.4305 10.6923 17.2079 10.4633C16.9853 10.2343 16.6822 10.1011 16.363 10.092ZM12 12.545C10.821 12.545 9.587 12.946 8.852 13.551C8.45863 13.4281 8.0491 13.3647 7.637 13.363C6.323 13.363 4.908 14.058 4.908 14.922V15.818H19.092V14.922C19.092 14.058 17.677 13.363 16.363 13.363C15.953 13.363 15.533 13.431 15.148 13.551C14.413 12.946 13.179 12.545 12 12.545Z" fill="#EBF7F9"/>
                    </svg>
                  <div class="text-wrapper-2">Data Siswa</div>
                </div>
                <div class="frame-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M21.75 5.25H18V3.9375C18 3.83437 17.9156 3.75 17.8125 3.75H16.5C16.3969 3.75 16.3125 3.83437 16.3125 3.9375V5.25H12.8438V3.9375C12.8438 3.83437 12.7594 3.75 12.6562 3.75H11.3438C11.2406 3.75 11.1562 3.83437 11.1562 3.9375V5.25H7.6875V3.9375C7.6875 3.83437 7.60313 3.75 7.5 3.75H6.1875C6.08437 3.75 6 3.83437 6 3.9375V5.25H2.25C1.83516 5.25 1.5 5.58516 1.5 6V19.5C1.5 19.9148 1.83516 20.25 2.25 20.25H21.75C22.1648 20.25 22.5 19.9148 22.5 19.5V6C22.5 5.58516 22.1648 5.25 21.75 5.25ZM20.8125 18.5625H3.1875V6.9375H6V8.25C6 8.35313 6.08437 8.4375 6.1875 8.4375H7.5C7.60313 8.4375 7.6875 8.35313 7.6875 8.25V6.9375H11.1562V8.25C11.1562 8.35313 11.2406 8.4375 11.3438 8.4375H12.6562C12.7594 8.4375 12.8438 8.35313 12.8438 8.25V6.9375H16.3125V8.25C16.3125 8.35313 16.3969 8.4375 16.5 8.4375H17.8125C17.9156 8.4375 18 8.35313 18 8.25V6.9375H20.8125V18.5625ZM9.75 11.625H5.4375C5.33437 11.625 5.25 11.7094 5.25 11.8125V12.9375C5.25 13.0406 5.33437 13.125 5.4375 13.125H9.75C9.85312 13.125 9.9375 13.0406 9.9375 12.9375V11.8125C9.9375 11.7094 9.85312 11.625 9.75 11.625ZM9.75 14.8125H5.4375C5.33437 14.8125 5.25 14.8969 5.25 15V16.125C5.25 16.2281 5.33437 16.3125 5.4375 16.3125H9.75C9.85312 16.3125 9.9375 16.2281 9.9375 16.125V15C9.9375 14.8969 9.85312 14.8125 9.75 14.8125ZM16.9734 10.6547L14.5453 14.0227L13.3078 12.3094C13.2375 12.2109 13.125 12.1547 13.0055 12.1547H11.7188C11.5664 12.1547 11.4773 12.3281 11.5664 12.4523L14.2406 16.1602C14.2751 16.2081 14.3206 16.2471 14.3731 16.274C14.4257 16.3009 14.4839 16.315 14.543 16.315C14.602 16.315 14.6602 16.3009 14.7128 16.274C14.7654 16.2471 14.8108 16.2081 14.8453 16.1602L18.7125 10.8C18.8016 10.6758 18.7125 10.5023 18.5602 10.5023H17.2734C17.1562 10.5 17.0438 10.5586 16.9734 10.6547Z" fill="#EBF7F9"/>
                    </svg>
                  <div class="text-wrapper-2">Jadwal Ajar</div>
                </div>
                <div class="frame-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M19.5001 12C18.9661 12.0028 18.4427 12.1495 17.9851 12.4245L15.8408 10.2803L17.5606 8.56055C17.8418 8.27925 17.9998 7.89779 17.9998 7.50005C17.9998 7.1023 17.8418 6.72084 17.5606 6.43955L13.0606 1.93955C12.7793 1.65834 12.3978 1.50037 12.0001 1.50037C11.6023 1.50037 11.2209 1.65834 10.9396 1.93955L6.43957 6.43955C6.15837 6.72084 6.00039 7.1023 6.00039 7.50005C6.00039 7.89779 6.15837 8.27925 6.43957 8.56055L8.15932 10.2803L6.01507 12.4245C5.37973 12.0476 4.62863 11.9155 3.90281 12.0532C3.17699 12.1908 2.52639 12.5887 2.07318 13.1721C1.61998 13.7555 1.39534 14.4843 1.44147 15.2216C1.48759 15.9589 1.8013 16.6541 2.32368 17.1764C2.84606 17.6988 3.54117 18.0125 4.27849 18.0587C5.0158 18.1048 5.74459 17.8801 6.328 17.4269C6.91141 16.9737 7.3093 16.3231 7.44695 15.5973C7.5846 14.8715 7.45254 14.1204 7.07557 13.485L9.21982 11.3408L10.9396 13.0605C11.0324 13.1513 11.1368 13.2295 11.2501 13.293V16.5H9.00007V22.5H15.0001V16.5H12.7501V13.2923C12.8633 13.229 12.9677 13.151 13.0606 13.0605L14.7803 11.3408L16.9246 13.485C16.5924 14.0548 16.4578 14.7184 16.5418 15.3725C16.6257 16.0267 16.9234 16.6348 17.3887 17.1022C17.8539 17.5697 18.4606 17.8703 19.1143 17.9574C19.7681 18.0444 20.4323 17.913 21.0036 17.5836C21.5749 17.2541 22.0214 16.7451 22.2736 16.1358C22.5258 15.5264 22.5695 14.8507 22.3981 14.2139C22.2266 13.577 21.8495 13.0147 21.3254 12.6144C20.8013 12.214 20.1596 11.998 19.5001 12ZM6.00007 15C6.00007 15.2967 5.9121 15.5867 5.74728 15.8334C5.58246 16.0801 5.34819 16.2723 5.0741 16.3859C4.80001 16.4994 4.49841 16.5291 4.20744 16.4712C3.91647 16.4133 3.64919 16.2705 3.43941 16.0607C3.22964 15.8509 3.08677 15.5837 3.0289 15.2927C2.97102 15.0017 3.00072 14.7001 3.11425 14.426C3.22779 14.1519 3.42005 13.9177 3.66672 13.7528C3.91339 13.588 4.2034 13.5 4.50007 13.5C4.89778 13.5004 5.27908 13.6586 5.5603 13.9398C5.84151 14.221 5.99968 14.6023 6.00007 15ZM13.5001 18V21H10.5001V18H13.5001ZM12.0001 12L7.50007 7.50005L12.0001 3.00005L16.5001 7.50005L12.0001 12ZM19.5001 16.5C19.2034 16.5 18.9134 16.4121 18.6667 16.2472C18.42 16.0824 18.2278 15.8482 18.1143 15.5741C18.0007 15.3 17.971 14.9984 18.0289 14.7074C18.0868 14.4164 18.2296 14.1492 18.4394 13.9394C18.6492 13.7296 18.9165 13.5867 19.2074 13.5289C19.4984 13.471 19.8 13.5007 20.0741 13.6142C20.3482 13.7278 20.5825 13.92 20.7473 14.1667C20.9121 14.4134 21.0001 14.7034 21.0001 15C20.9997 15.3977 20.8415 15.779 20.5603 16.0603C20.2791 16.3415 19.8978 16.4996 19.5001 16.5Z" fill="#EBF7F9"/>
                    </svg>
                  <div class="text-wrapper-2">Jadwal Pelajaran</div>
                </div>
                <div class="frame-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M21.1781 5.46657L12.1781 2.46657C12.0625 2.42797 11.9375 2.42797 11.8219 2.46657L2.82188 5.46657C2.70995 5.50394 2.61261 5.57555 2.54363 5.67128C2.47465 5.76701 2.43752 5.88201 2.4375 6.00001V13.5C2.4375 13.6492 2.49676 13.7923 2.60225 13.8978C2.70774 14.0032 2.85082 14.0625 3 14.0625C3.14918 14.0625 3.29226 14.0032 3.39775 13.8978C3.50324 13.7923 3.5625 13.6492 3.5625 13.5V6.78001L7.18875 7.98938C6.73146 8.66519 6.42159 9.4297 6.27929 10.2332C6.137 11.0367 6.16547 11.8611 6.36285 12.6528C6.56023 13.4446 6.92211 14.1859 7.42493 14.8285C7.92774 15.4712 8.56024 16.0008 9.28125 16.3828C7.47656 16.995 5.90625 18.2194 4.78125 19.9453C4.71658 20.0692 4.70033 20.2127 4.73565 20.3479C4.77097 20.483 4.85534 20.6002 4.97233 20.6766C5.08932 20.753 5.23055 20.7831 5.36853 20.7611C5.50651 20.7391 5.63135 20.6665 5.71875 20.5575C7.16906 18.3366 9.4575 17.0625 12 17.0625C14.5425 17.0625 16.8309 18.3366 18.2812 20.5575C18.3681 20.6688 18.4937 20.7434 18.633 20.7664C18.7723 20.7895 18.9152 20.7593 19.0333 20.6818C19.1513 20.6044 19.236 20.4853 19.2703 20.3484C19.3047 20.2114 19.2863 20.0665 19.2188 19.9425C18.0938 18.2194 16.5253 16.995 14.7188 16.38C15.4394 15.9975 16.0714 15.4677 16.5738 14.8248C17.0761 14.182 17.4375 13.4406 17.6344 12.6489C17.8314 11.8572 17.8594 11.0329 17.7168 10.2296C17.5742 9.42633 17.264 8.66208 16.8066 7.98657L21.1781 6.53345C21.29 6.49602 21.3872 6.42438 21.4562 6.32865C21.5251 6.23293 21.5622 6.11796 21.5622 6.00001C21.5622 5.88205 21.5251 5.76709 21.4562 5.67136C21.3872 5.57563 21.29 5.50399 21.1781 5.46657ZM16.6875 11.25C16.6878 11.9969 16.5097 12.7331 16.1678 13.3973C15.826 14.0614 15.3304 14.6342 14.7224 15.068C14.1143 15.5018 13.4114 15.784 12.6722 15.8911C11.933 15.9982 11.1789 15.9272 10.4727 15.6838C9.76651 15.4404 9.12872 15.0318 8.61245 14.492C8.09618 13.9522 7.71638 13.2969 7.50469 12.5806C7.293 11.8642 7.25556 11.1077 7.39548 10.374C7.53539 9.6403 7.84862 8.95064 8.30906 8.36251L11.8219 9.53345C11.9375 9.57204 12.0625 9.57204 12.1781 9.53345L15.6909 8.36251C16.3376 9.18596 16.6886 10.203 16.6875 11.25ZM12 8.40751L4.78125 6.00001L12 3.59251L19.2188 6.00001L12 8.40751Z" fill="#EBF7F9"/>
                    </svg>
                  <div class="text-wrapper-2">Rekap Presensi</div>
                </div>
                <div class="frame-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M19.8999 12.66C19.7396 12.4775 19.6512 12.2429 19.6512 12C19.6512 11.7571 19.7396 11.5225 19.8999 11.34L21.1799 9.90002C21.3209 9.74269 21.4085 9.54472 21.4301 9.33452C21.4516 9.12433 21.4061 8.9127 21.2999 8.73002L19.2999 5.27002C19.1948 5.08754 19.0348 4.94289 18.8426 4.8567C18.6505 4.77051 18.4361 4.74718 18.2299 4.79002L16.3499 5.17002C16.1107 5.21945 15.8616 5.17961 15.6498 5.05802C15.4379 4.93643 15.2779 4.7415 15.1999 4.51002L14.5899 2.68002C14.5228 2.4814 14.395 2.30888 14.2245 2.18686C14.0541 2.06484 13.8495 1.99948 13.6399 2.00002H9.6399C9.42183 1.98864 9.20603 2.04894 9.02546 2.17173C8.84489 2.29452 8.70948 2.47304 8.6399 2.68002L8.0799 4.51002C8.0019 4.7415 7.84187 4.93643 7.63001 5.05802C7.41815 5.17961 7.16911 5.21945 6.9299 5.17002L4.9999 4.79002C4.80445 4.7624 4.6052 4.79324 4.42724 4.87866C4.24929 4.96407 4.1006 5.10025 3.9999 5.27002L1.9999 8.73002C1.89106 8.91067 1.84212 9.1211 1.86008 9.33124C1.87804 9.54138 1.96198 9.74046 2.0999 9.90002L3.3699 11.34C3.53022 11.5225 3.61863 11.7571 3.61863 12C3.61863 12.2429 3.53022 12.4775 3.3699 12.66L2.0999 14.1C1.96198 14.2596 1.87804 14.4587 1.86008 14.6688C1.84212 14.8789 1.89106 15.0894 1.9999 15.27L3.9999 18.73C4.10499 18.9125 4.26502 19.0571 4.45715 19.1433C4.64928 19.2295 4.86372 19.2529 5.0699 19.21L6.9499 18.83C7.18911 18.7806 7.43815 18.8204 7.65001 18.942C7.86187 19.0636 8.0219 19.2585 8.0999 19.49L8.7099 21.32C8.77948 21.527 8.91489 21.7055 9.09546 21.8283C9.27603 21.9511 9.49183 22.0114 9.7099 22H13.7099C13.9195 22.0006 14.1241 21.9352 14.2945 21.8132C14.465 21.6912 14.5928 21.5186 14.6599 21.32L15.2699 19.49C15.3479 19.2585 15.5079 19.0636 15.7198 18.942C15.9316 18.8204 16.1807 18.7806 16.4199 18.83L18.2999 19.21C18.5061 19.2529 18.7205 19.2295 18.9126 19.1433C19.1048 19.0571 19.2648 18.9125 19.3699 18.73L21.3699 15.27C21.4761 15.0873 21.5216 14.8757 21.5001 14.6655C21.4785 14.4553 21.3909 14.2573 21.2499 14.1L19.8999 12.66ZM18.4099 14L19.2099 14.9L17.9299 17.12L16.7499 16.88C16.0297 16.7328 15.2805 16.8551 14.6445 17.2238C14.0085 17.5925 13.53 18.1819 13.2999 18.88L12.9199 20H10.3599L9.9999 18.86C9.76975 18.1619 9.29128 17.5725 8.6553 17.2038C8.01932 16.8351 7.27012 16.7128 6.5499 16.86L5.3699 17.1L4.0699 14.89L4.8699 13.99C5.36185 13.44 5.63383 12.7279 5.63383 11.99C5.63383 11.2521 5.36185 10.54 4.8699 9.99002L4.0699 9.09002L5.3499 6.89002L6.5299 7.13002C7.25012 7.27724 7.99932 7.1549 8.6353 6.78622C9.27128 6.41753 9.74975 5.82818 9.9799 5.13002L10.3599 4.00002H12.9199L13.2999 5.14002C13.53 5.83818 14.0085 6.42753 14.6445 6.79622C15.2805 7.1649 16.0297 7.28724 16.7499 7.14002L17.9299 6.90002L19.2099 9.12002L18.4099 10.02C17.9235 10.5688 17.6549 11.2767 17.6549 12.01C17.6549 12.7433 17.9235 13.4513 18.4099 14ZM11.6399 8.00002C10.8488 8.00002 10.0754 8.23461 9.41761 8.67414C8.75982 9.11366 8.24713 9.73838 7.94438 10.4693C7.64163 11.2002 7.56241 12.0045 7.71675 12.7804C7.8711 13.5563 8.25206 14.269 8.81147 14.8284C9.37088 15.3879 10.0836 15.7688 10.8595 15.9232C11.6355 16.0775 12.4397 15.9983 13.1706 15.6955C13.9015 15.3928 14.5262 14.8801 14.9658 14.2223C15.4053 13.5645 15.6399 12.7911 15.6399 12C15.6399 10.9392 15.2185 9.92174 14.4683 9.17159C13.7182 8.42144 12.7008 8.00002 11.6399 8.00002ZM11.6399 14C11.2443 14 10.8577 13.8827 10.5288 13.663C10.1999 13.4432 9.94351 13.1308 9.79214 12.7654C9.64076 12.3999 9.60116 11.9978 9.67833 11.6098C9.7555 11.2219 9.94598 10.8655 10.2257 10.5858C10.5054 10.3061 10.8618 10.1156 11.2497 10.0384C11.6377 9.96128 12.0398 10.0009 12.4053 10.1523C12.7707 10.3036 13.0831 10.56 13.3028 10.8889C13.5226 11.2178 13.6399 11.6045 13.6399 12C13.6399 12.5304 13.4292 13.0392 13.0541 13.4142C12.679 13.7893 12.1703 14 11.6399 14Z" fill="#EBF7F9"/>
                    </svg>
                  <div class="text-wrapper-2">Setting</div>
                </div>
              </div>
              <div class="LOGOUT">
                <div class="text-wrapper-3">Logout</div>
                <img class="group-2" src="img/group.png" />
              </div>
            </div>
          </div>
          <div class="DATA-GURU-wrapper">
            <div class="div-2">
              <div class="frame-4">
                <div class="frame-5"><div class="text-wrapper-4">No.</div></div>
                <div class="frame-6"><div class="text-wrapper-5">Kode Guru</div></div>
                <div class="frame-7"><div class="text-wrapper-5">Nama Lengkap</div></div>
                <div class="frame-8"><div class="text-wrapper-5">TTL</div></div>
                <div class="frame-9"><div class="text-wrapper-5">Jenis Kelamin</div></div>
                <div class="frame-10"><div class="text-wrapper-5">Agama</div></div>
                <div class="frame-11"><div class="text-wrapper-5">NIP</div></div>
                <div class="frame-11"><div class="text-wrapper-5">NUPTK</div></div>
                <div class="frame-12"><div class="text-wrapper-5">Alamat</div></div>
                <div class="frame-13"><div class="text-wrapper-5">No Telpon</div></div>
                <div class="frame-13"><div class="text-wrapper-5">Email Sekolah</div></div>
                <div class="frame-13"><div class="text-wrapper-5">Email Pribadi</div></div>
                <div class="frame-13"><div class="text-wrapper-5">Division</div></div>
                <div class="frame-14"><div class="text-wrapper-5">Action</div></div>
              </div>
              <div class="frame-15">
                <div class="frame-16"><div class="text-wrapper-6">1</div></div>
                <div class="frame-17"><div class="text-wrapper-7">0192302</div></div>
                <div class="frame-7"><div class="text-wrapper-7">Nama Gurunya Siapa gtu</div></div>
                <div class="frame-18"><div class="text-wrapper-8">Surakarta, 1 Januari 1972</div></div>
                <div class="frame-9"><div class="text-wrapper-7">Laki Tulen</div></div>
                <div class="frame-10"><div class="text-wrapper-7">Islam</div></div>
                <div class="frame-11"><div class="text-wrapper-7">1829376637828</div></div>
                <div class="frame-11"><div class="text-wrapper-7">9283291083829</div></div>
                <div class="frame-12"><div class="text-wrapper-7">Dimana aja bolee :v</div></div>
                <div class="frame-13"><div class="text-wrapper-7">0818729191900</div></div>
                <div class="frame-13"><div class="text-wrapper-9">Emailnya@gmail.coy</div></div>
                <div class="frame-13">
                  <a href="mailto:Emailnya@gmail.coy" target="_blank" rel="noopener noreferrer"
                    ><div class="text-wrapper-9">Emailnya@gmail.coy</div></a
                  >
                </div>
                <div class="frame-13">
                  <div class="DIVISI">
                    <div class="ellipse-2"></div>
                    <div class="text-wrapper-10">Kurikulum</div>
                  </div>
                </div>
                <img class="frame-19" src="img/frame-893-7.svg" />
              </div>
              <div class="frame-15">
                <div class="frame-16"><div class="text-wrapper-6">1</div></div>
                <div class="frame-17"><div class="text-wrapper-7">0192302</div></div>
                <div class="frame-7"><div class="text-wrapper-7">Nama Gurunya Siapa gtu</div></div>
                <div class="frame-18"><div class="text-wrapper-8">Surakarta, 1 Januari 1972</div></div>
                <div class="frame-9"><div class="text-wrapper-7">Laki Tulen</div></div>
                <div class="frame-10"><div class="text-wrapper-7">Islam</div></div>
                <div class="frame-11"><div class="text-wrapper-7">1829376637828</div></div>
                <div class="frame-11"><div class="text-wrapper-7">9283291083829</div></div>
                <div class="frame-12"><div class="text-wrapper-7">Dimana aja bolee :v</div></div>
                <div class="frame-13"><div class="text-wrapper-7">0818729191900</div></div>
                <div class="frame-13"><div class="text-wrapper-9">Emailnya@gmail.coy</div></div>
                <div class="frame-13">
                  <a href="mailto:Emailnya@gmail.coy" target="_blank" rel="noopener noreferrer"
                    ><div class="text-wrapper-9">Emailnya@gmail.coy</div></a
                  >
                </div>
                <div class="frame-13">
                  <div class="DIVISI-2">
                    <div class="ellipse-2"></div>
                    <div class="text-wrapper-10">Kurikulum</div>
                  </div>
                </div>
                <img class="frame-19" src="img/frame-893.svg" />
              </div>
              <div class="frame-15">
                <div class="frame-16"><div class="text-wrapper-6">1</div></div>
                <div class="frame-17"><div class="text-wrapper-7">0192302</div></div>
                <div class="frame-7"><div class="text-wrapper-7">Nama Gurunya Siapa gtu</div></div>
                <div class="frame-18"><div class="text-wrapper-8">Surakarta, 1 Januari 1972</div></div>
                <div class="frame-9"><div class="text-wrapper-7">Laki Tulen</div></div>
                <div class="frame-10"><div class="text-wrapper-7">Islam</div></div>
                <div class="frame-11"><div class="text-wrapper-7">1829376637828</div></div>
                <div class="frame-11"><div class="text-wrapper-7">9283291083829</div></div>
                <div class="frame-12"><div class="text-wrapper-7">Dimana aja bolee :v</div></div>
                <div class="frame-13"><div class="text-wrapper-7">0818729191900</div></div>
                <div class="frame-13"><div class="text-wrapper-9">Emailnya@gmail.coy</div></div>
                <div class="frame-13">
                  <a href="mailto:Emailnya@gmail.coy" target="_blank" rel="noopener noreferrer"
                    ><div class="text-wrapper-9">Emailnya@gmail.coy</div></a
                  >
                </div>
                <div class="frame-13">
                  <div class="DIVISI-2">
                    <div class="ellipse-2"></div>
                    <div class="text-wrapper-10">Kurikulum</div>
                  </div>
                </div>
                <img class="frame-19" src="img/frame-893-2.svg" />
              </div>
              <div class="frame-15">
                <div class="frame-16"><div class="text-wrapper-6">1</div></div>
                <div class="frame-17"><div class="text-wrapper-7">0192302</div></div>
                <div class="frame-7"><div class="text-wrapper-7">Nama Gurunya Siapa gtu</div></div>
                <div class="frame-18"><div class="text-wrapper-8">Surakarta, 1 Januari 1972</div></div>
                <div class="frame-9"><div class="text-wrapper-7">Laki Tulen</div></div>
                <div class="frame-10"><div class="text-wrapper-7">Islam</div></div>
                <div class="frame-11"><div class="text-wrapper-7">1829376637828</div></div>
                <div class="frame-11"><div class="text-wrapper-7">9283291083829</div></div>
                <div class="frame-12"><div class="text-wrapper-7">Dimana aja bolee :v</div></div>
                <div class="frame-13"><div class="text-wrapper-7">0818729191900</div></div>
                <div class="frame-13"><div class="text-wrapper-9">Emailnya@gmail.coy</div></div>
                <div class="frame-13">
                  <a href="mailto:Emailnya@gmail.coy" target="_blank" rel="noopener noreferrer"
                    ><div class="text-wrapper-9">Emailnya@gmail.coy</div></a
                  >
                </div>
                <div class="frame-13">
                  <div class="DIVISI-2">
                    <div class="ellipse-2"></div>
                    <div class="text-wrapper-10">Kurikulum</div>
                  </div>
                </div>
                <img class="frame-19" src="img/frame-893-3.svg" />
              </div>
              <div class="frame-15">
                <div class="frame-16"><div class="text-wrapper-6">1</div></div>
                <div class="frame-17"><div class="text-wrapper-7">0192302</div></div>
                <div class="frame-7"><div class="text-wrapper-7">Nama Gurunya Siapa gtu</div></div>
                <div class="frame-18"><div class="text-wrapper-8">Surakarta, 1 Januari 1972</div></div>
                <div class="frame-9"><div class="text-wrapper-7">Laki Tulen</div></div>
                <div class="frame-10"><div class="text-wrapper-7">Islam</div></div>
                <div class="frame-11"><div class="text-wrapper-7">1829376637828</div></div>
                <div class="frame-11"><div class="text-wrapper-7">9283291083829</div></div>
                <div class="frame-12"><div class="text-wrapper-7">Dimana aja bolee :v</div></div>
                <div class="frame-13"><div class="text-wrapper-7">0818729191900</div></div>
                <div class="frame-13"><div class="text-wrapper-9">Emailnya@gmail.coy</div></div>
                <div class="frame-13">
                  <a href="mailto:Emailnya@gmail.coy" target="_blank" rel="noopener noreferrer"
                    ><div class="text-wrapper-9">Emailnya@gmail.coy</div></a
                  >
                </div>
                <div class="frame-13">
                  <div class="DIVISI-2">
                    <div class="ellipse-2"></div>
                    <div class="text-wrapper-10">Kurikulum</div>
                  </div>
                </div>
                <img class="frame-19" src="img/image.svg" />
              </div>
              <div class="frame-15">
                <div class="frame-16"><div class="text-wrapper-6">1</div></div>
                <div class="frame-17"><div class="text-wrapper-7">0192302</div></div>
                <div class="frame-7"><div class="text-wrapper-7">Nama Gurunya Siapa gtu</div></div>
                <div class="frame-18"><div class="text-wrapper-8">Surakarta, 1 Januari 1972</div></div>
                <div class="frame-9"><div class="text-wrapper-7">Laki Tulen</div></div>
                <div class="frame-10"><div class="text-wrapper-7">Islam</div></div>
                <div class="frame-11"><div class="text-wrapper-7">1829376637828</div></div>
                <div class="frame-11"><div class="text-wrapper-7">9283291083829</div></div>
                <div class="frame-12"><div class="text-wrapper-7">Dimana aja bolee :v</div></div>
                <div class="frame-13"><div class="text-wrapper-7">0818729191900</div></div>
                <div class="frame-13"><div class="text-wrapper-9">Emailnya@gmail.coy</div></div>
                <div class="frame-13">
                  <a href="mailto:Emailnya@gmail.coy" target="_blank" rel="noopener noreferrer"
                    ><div class="text-wrapper-9">Emailnya@gmail.coy</div></a
                  >
                </div>
                <div class="frame-13">
                  <div class="DIVISI-2">
                    <div class="ellipse-2"></div>
                    <div class="text-wrapper-10">Kurikulum</div>
                  </div>
                </div>
                <img class="frame-19" src="img/frame-893-6.svg" />
              </div>
              <div class="frame-15">
                <div class="frame-16"><div class="text-wrapper-6">1</div></div>
                <div class="frame-17"><div class="text-wrapper-7">0192302</div></div>
                <div class="frame-7"><div class="text-wrapper-7">Nama Gurunya Siapa gtu</div></div>
                <div class="frame-18"><div class="text-wrapper-8">Surakarta, 1 Januari 1972</div></div>
                <div class="frame-9"><div class="text-wrapper-7">Laki Tulen</div></div>
                <div class="frame-10"><div class="text-wrapper-7">Islam</div></div>
                <div class="frame-11"><div class="text-wrapper-7">1829376637828</div></div>
                <div class="frame-11"><div class="text-wrapper-7">9283291083829</div></div>
                <div class="frame-12"><div class="text-wrapper-7">Dimana aja bolee :v</div></div>
                <div class="frame-13"><div class="text-wrapper-7">0818729191900</div></div>
                <div class="frame-13"><div class="text-wrapper-9">Emailnya@gmail.coy</div></div>
                <div class="frame-13">
                  <a href="mailto:Emailnya@gmail.coy" target="_blank" rel="noopener noreferrer"
                    ><div class="text-wrapper-9">Emailnya@gmail.coy</div></a
                  >
                </div>
                <div class="frame-13">
                  <div class="DIVISI-2">
                    <div class="ellipse-2"></div>
                    <div class="text-wrapper-10">Kurikulum</div>
                  </div>
                </div>
                <img class="frame-19" src="img/frame-893-4.svg" />
              </div>
              <div class="frame-15">
                <div class="frame-16"><div class="text-wrapper-6">1</div></div>
                <div class="frame-17"><div class="text-wrapper-7">0192302</div></div>
                <div class="frame-7"><div class="text-wrapper-7">Nama Gurunya Siapa gtu</div></div>
                <div class="frame-18"><div class="text-wrapper-8">Surakarta, 1 Januari 1972</div></div>
                <div class="frame-9"><div class="text-wrapper-7">Laki Tulen</div></div>
                <div class="frame-10"><div class="text-wrapper-7">Islam</div></div>
                <div class="frame-11"><div class="text-wrapper-7">1829376637828</div></div>
                <div class="frame-11"><div class="text-wrapper-7">9283291083829</div></div>
                <div class="frame-12"><div class="text-wrapper-7">Dimana aja bolee :v</div></div>
                <div class="frame-13"><div class="text-wrapper-7">0818729191900</div></div>
                <div class="frame-13"><div class="text-wrapper-9">Emailnya@gmail.coy</div></div>
                <div class="frame-13">
                  <a href="mailto:Emailnya@gmail.coy" target="_blank" rel="noopener noreferrer"
                    ><div class="text-wrapper-9">Emailnya@gmail.coy</div></a
                  >
                </div>
                <div class="frame-13">
                  <div class="DIVISI-2">
                    <div class="ellipse-2"></div>
                    <div class="text-wrapper-10">Kurikulum</div>
                  </div>
                </div>
                <img class="frame-19" src="img/frame-893-5.svg" />
              </div>
            </div>
          </div>
        </div>
        <div class="frame-20">
          <div class="IMPORT">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path d="M5 20.5H19V18.5H5V20.5ZM5 10.5H9V16.5H15V10.5H19L12 3.5L5 10.5Z" fill="#17A2B8"/>
                </svg>
            <div class="text-wrapper-11">Import</div>
          </div>
          <div class="frame-21">
            <div class="text-wrapper-12">Seacrh from Name</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
              <path d="M17.7043 16.7848L14.3054 13.3958C15.402 11.9988 15.9971 10.2735 15.9948 8.49743C15.9948 6.91569 15.5258 5.36947 14.647 4.0543C13.7683 2.73913 12.5192 1.71408 11.0579 1.10877C9.59657 0.503465 7.98855 0.34509 6.43721 0.653672C4.88586 0.962254 3.46085 1.72393 2.34239 2.84239C1.22393 3.96085 0.462254 5.38586 0.153672 6.93721C-0.15491 8.48855 0.00346513 10.0966 0.608771 11.5579C1.21408 13.0192 2.23913 14.2683 3.5543 15.147C4.86947 16.0258 6.41569 16.4948 7.99743 16.4948C9.77351 16.4971 11.4988 15.902 12.8958 14.8054L16.2848 18.2043C16.3777 18.298 16.4883 18.3724 16.6101 18.4231C16.7319 18.4739 16.8626 18.5 16.9945 18.5C17.1265 18.5 17.2572 18.4739 17.379 18.4231C17.5008 18.3724 17.6114 18.298 17.7043 18.2043C17.798 18.1114 17.8724 18.0008 17.9231 17.879C17.9739 17.7572 18 17.6265 18 17.4945C18 17.3626 17.9739 17.2319 17.9231 17.1101C17.8724 16.9883 17.798 16.8777 17.7043 16.7848ZM1.99936 8.49743C1.99936 7.31112 2.35114 6.15146 3.01022 5.16508C3.66929 4.1787 4.60606 3.40991 5.70207 2.95593C6.79807 2.50196 8.00408 2.38317 9.16759 2.61461C10.3311 2.84605 11.3999 3.41731 12.2387 4.25615C13.0775 5.095 13.6488 6.16375 13.8802 7.32726C14.1117 8.49077 13.9929 9.69678 13.5389 10.7928C13.0849 11.8888 12.3162 12.8256 11.3298 13.4846C10.3434 14.1437 9.18373 14.4955 7.99743 14.4955C6.40664 14.4955 4.88101 13.8636 3.75615 12.7387C2.6313 11.6138 1.99936 10.0882 1.99936 8.49743Z" fill="#17A2B8"/>
            </svg>
          </div>
          <div class="frame-22">
            <div class="text-wrapper-12">Cari kode guru</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
              <path d="M17.7043 16.7848L14.3054 13.3958C15.402 11.9988 15.9971 10.2735 15.9948 8.49743C15.9948 6.91569 15.5258 5.36947 14.647 4.0543C13.7683 2.73913 12.5192 1.71408 11.0579 1.10877C9.59657 0.503465 7.98855 0.34509 6.43721 0.653672C4.88586 0.962254 3.46085 1.72393 2.34239 2.84239C1.22393 3.96085 0.462254 5.38586 0.153672 6.93721C-0.15491 8.48855 0.00346513 10.0966 0.608771 11.5579C1.21408 13.0192 2.23913 14.2683 3.5543 15.147C4.86947 16.0258 6.41569 16.4948 7.99743 16.4948C9.77351 16.4971 11.4988 15.902 12.8958 14.8054L16.2848 18.2043C16.3777 18.298 16.4883 18.3724 16.6101 18.4231C16.7319 18.4739 16.8626 18.5 16.9945 18.5C17.1265 18.5 17.2572 18.4739 17.379 18.4231C17.5008 18.3724 17.6114 18.298 17.7043 18.2043C17.798 18.1114 17.8724 18.0008 17.9231 17.879C17.9739 17.7572 18 17.6265 18 17.4945C18 17.3626 17.9739 17.2319 17.9231 17.1101C17.8724 16.9883 17.798 16.8777 17.7043 16.7848ZM1.99936 8.49743C1.99936 7.31112 2.35114 6.15146 3.01022 5.16508C3.66929 4.1787 4.60606 3.40991 5.70207 2.95593C6.79807 2.50196 8.00408 2.38317 9.16759 2.61461C10.3311 2.84605 11.3999 3.41731 12.2387 4.25615C13.0775 5.095 13.6488 6.16375 13.8802 7.32726C14.1117 8.49077 13.9929 9.69678 13.5389 10.7928C13.0849 11.8888 12.3162 12.8256 11.3298 13.4846C10.3434 14.1437 9.18373 14.4955 7.99743 14.4955C6.40664 14.4955 4.88101 13.8636 3.75615 12.7387C2.6313 11.6138 1.99936 10.0882 1.99936 8.49743Z" fill="#17A2B8"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>