@section('title', 'Magic Pay')
<x-app-layout>
    <div class="flex justify-center">
        <img class="w-20 h-20 border-2 text-center border-purple-500 mb-5 rounded-full shadow-lg"
            src="https://ui-avatars.com/api/?name={{ $user->name }}&background=ffffff" alt="{{ $user->name }}" />
    </div>
    <p class="text-center">{{ $user->name }}</p>
    <p class="text-center">{{ $user->wallet ? number_format($user->wallet->amount) : '-' }} <span
            class="text-xs">MMK</span> </p>


    {{-- Horizontal Menu Action --}}
    <div class="flex justify-center">
        <div class="w-full max-w-5xl bg-transparent mt-10 dark:bg-gray-800 dark:border-gray-700">




            <div class="grid grid-flow-col space-x-3 grid-cols-2">
                <a href="{{ route('update_password') }}"
                    class="flex p-5 cursor-pointer  bg-white border border-gray-200 rounded-lg shadow items-center justify-center text-md font-medium text-gray-900 dark:text-white  group">
                    {{-- <div class="flex "> --}}


                    <svg viewBox="0 -1 158 158"
                        class="w-5 h-5  text-gray-500  dark:text-gray-400  {{ areActiveRoutes(['wallet'], 'text-purple-600') }} group-hover:text-purple-600 dark:group-hover:text-purple-500"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path
                                d="M106.71 153.225C108.807 153.64 110.932 153.902 113.068 154.007C114.256 154.067 115.444 154.131 116.632 154.196C122.009 154.485 127.568 154.783 133.046 154.814C133.331 154.814 133.616 154.814 133.902 154.814C138.998 154.814 144.304 154.56 149.685 154.056C154.706 153.586 156.05 152.168 156.222 147.162C156.588 136.482 156.855 125.62 157.114 115.117L157.256 109.331C157.273 108.282 157.162 107.234 156.924 106.211C156.37 103.744 154.733 102.198 152.545 102.082C151.437 102.023 150.344 102.354 149.455 103.016C148.566 103.678 147.938 104.63 147.679 105.706C147.2 107.466 146.948 109.279 146.93 111.103C146.865 116.384 146.868 121.751 146.87 126.942C146.87 128.748 146.87 130.555 146.87 132.361C146.87 135.003 146.87 137.646 146.87 140.37V143.689L146.546 143.769C146.29 143.846 146.028 143.898 145.762 143.925C144.397 143.985 143.032 144.051 141.667 144.119C138.006 144.296 134.22 144.481 130.501 144.537C126.414 144.601 122.257 144.58 118.235 144.561C115.78 144.549 113.324 144.537 110.871 144.544C109.495 144.503 108.119 144.602 106.764 144.839C104.417 145.331 102.917 146.939 102.85 149.033C102.816 150.304 103.263 152.528 106.71 153.225Z"
                                fill="#000000" />
                            <path
                                d="M43.2818 144.629C36.2752 144.526 29.1517 144.499 22.2619 144.473C20.0561 144.465 17.8503 144.456 15.6445 144.446C14.5293 144.442 13.4141 144.442 12.2132 144.446H11.0377C11.015 144.223 10.993 144.018 10.9729 143.826C10.908 143.204 10.8548 142.713 10.8386 142.241C10.679 137.655 10.5219 133.068 10.3675 128.482C10.1556 122.231 9.9407 115.979 9.72272 109.726C9.70624 108.258 9.58174 106.792 9.35033 105.342C9.24997 104.581 8.88627 103.878 8.32211 103.356C7.75795 102.834 7.02857 102.524 6.26019 102.481C4.5293 102.344 3.21105 103.245 2.56229 105.018C2.3265 105.699 2.18161 106.408 2.13147 107.126L2.05243 108.015C1.90192 109.685 1.74687 111.414 1.70081 113.128C1.35437 125.921 1.06424 137.539 0.814467 148.648C0.730128 152.377 2.93601 154.766 6.86555 155.202C8.14649 155.32 9.43292 155.369 10.7192 155.347C11.1201 155.347 11.5204 155.347 11.9207 155.352L17.6901 155.422C26.3796 155.527 35.3643 155.636 44.203 155.681H44.2445C45.6434 155.645 47.0222 155.34 48.3051 154.782C49.2556 154.457 50.0811 153.843 50.6668 153.028C51.2526 152.213 51.5698 151.237 51.5744 150.234C51.579 149.231 51.2709 148.252 50.6926 147.431C50.1145 146.611 49.2948 145.99 48.3473 145.655C46.7327 145.018 45.0178 144.67 43.2818 144.629Z"
                                fill="#000000" />
                            <path
                                d="M5.46434 55.9116H5.56872C7.74987 55.9116 9.48596 54.2675 10.1146 51.596C10.2635 50.9 10.3395 50.1904 10.3416 49.4787C10.3526 48.8961 10.3676 48.3134 10.3818 47.7309C10.4279 45.8996 10.4753 44.0065 10.4059 42.1377C10.2096 36.8816 9.99504 31.6262 9.76239 26.3714C9.6002 22.5532 9.44119 18.734 9.28549 14.914C9.23943 13.7444 9.25111 12.5618 9.26408 11.3099C9.26797 10.9105 9.2718 10.504 9.27439 10.0877C9.82779 10.0845 10.365 10.0768 10.8898 10.0697C12.382 10.0477 13.7968 10.0287 15.1819 10.1064C24.9678 10.6559 33.2002 10.8185 41.5724 9.80739C43.085 9.64473 44.5518 9.19213 45.8924 8.47453C46.4537 8.169 46.9238 7.72062 47.2549 7.17488C47.586 6.62907 47.7662 6.00546 47.7771 5.36759C47.78 4.71575 47.6098 4.07494 47.2837 3.51007C46.9577 2.9452 46.4875 2.47659 45.9209 2.15193C44.773 1.51972 43.5016 1.14296 42.1939 1.0476C40.8122 0.947933 39.4257 0.928669 38.0417 0.99039C37.6265 1.00075 37.2114 1.01174 36.7968 1.01757C30.887 1.10388 24.9772 1.19184 19.0674 1.28117L5.50837 1.48377C3.28637 1.51678 2.00511 2.55305 1.59379 4.65549C1.27157 6.2155 1.09461 7.80205 1.06509 9.39461C0.959994 20.0557 0.878155 31.7736 0.805493 46.2713C0.765463 47.9668 0.855699 49.6629 1.07539 51.3448C1.50098 54.1482 3.14048 55.8559 5.46434 55.9116Z"
                                fill="#000000" />
                            <path
                                d="M146.384 16.9851C146.207 19.1426 146.024 21.3745 145.894 23.576L145.717 26.4955C145.416 31.4073 145.105 36.4859 145.038 41.4922C145.044 43.6885 145.573 45.8519 146.58 47.8047C146.881 48.469 147.359 49.0382 147.961 49.4505C148.564 49.8626 149.268 50.1017 149.997 50.142H150.051C150.787 50.1106 151.501 49.8812 152.118 49.4782C152.735 49.0752 153.231 48.5135 153.554 47.8524C154.598 45.938 155.232 43.8278 155.414 41.656C156.368 30.1378 155.766 18.4525 155.184 7.15451L155.113 5.77896C154.983 3.29915 153.672 1.70126 151.313 1.15429C149.543 0.699719 147.721 0.479737 145.893 0.500348C136.582 0.798756 126.76 1.18575 114.981 1.71784C113.588 1.81371 112.218 2.12098 110.919 2.62873C110.197 2.88451 109.587 3.38119 109.19 4.0346C108.794 4.68801 108.636 5.45802 108.744 6.21419C108.743 6.99113 109.046 7.73773 109.59 8.29421C110.133 8.8507 110.873 9.17293 111.652 9.19183C112.048 9.2339 112.443 9.28174 112.837 9.32964C113.869 9.45392 114.935 9.58274 116.002 9.61381C118.446 9.68501 120.928 9.72385 123.333 9.76139C124.993 9.78728 126.652 9.81298 128.313 9.84988C132.634 9.94438 136.955 10.0505 141.437 10.1599L146.736 10.2895C146.736 10.4993 146.741 10.696 146.745 10.8837C146.755 11.5757 146.763 12.1219 146.725 12.6559C146.619 14.0968 146.501 15.541 146.384 16.9851Z"
                                fill="#000000" />
                            <path
                                d="M111.037 78.9068C112.216 78.8764 113.382 78.6576 114.492 78.2595C117.459 77.2284 117.898 75.1525 117.744 73.5938C117.536 71.4907 115.911 69.9313 113.605 69.6206C112.133 69.4595 110.65 69.4232 109.172 69.5125C99.7821 69.8297 90.3933 70.1579 81.0051 70.4964L72.5543 70.7961C72.3921 70.8013 72.2371 70.866 72.1197 70.9774L65.3723 71.0816C54.5631 71.2499 43.7542 71.4188 32.9454 71.5891C32.7806 71.5962 32.6086 71.5813 32.4347 71.5729C31.82 71.4764 31.1904 71.5748 30.6345 71.8538C29.6386 72.4947 28.5715 73.2934 28.1991 74.3576C27.6626 75.8898 28.5111 77.3572 30.3114 78.0097C31.0992 78.2848 31.9189 78.4583 32.7507 78.5275C33.7842 78.6233 34.8183 78.7366 35.8531 78.8512C38.4301 79.1826 41.0235 79.3729 43.6214 79.4208H43.757C65.4159 79.3366 87.4369 79.1302 108.732 78.9301L111.037 78.9068Z"
                                fill="#000000" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="157" height="156" fill="white" transform="translate(0.777344)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="ml-5">{{ __('Scan Pay') }}</span>
                    {{-- </div> --}}
                </a>
                <a href="{{ route('update_password') }}"
                    class="flex p-5 cursor-pointer  bg-white border border-gray-200 rounded-lg shadow items-center justify-center text-md font-medium text-gray-900 dark:text-white  group">
                    {{-- <div class="flex "> --}}
                    <svg class="w-6 h-6  text-gray-500  dark:text-gray-400  {{ areActiveRoutes(['wallet'], 'text-purple-600') }} group-hover:text-purple-600 dark:group-hover:text-purple-500"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        aria-labelledby="qrIconTitle" stroke="#000000" stroke-width="1" stroke-linecap="square"
                        stroke-linejoin="miter" color="#000000">
                        <title id="qrIconTitle">QR Code</title>
                        <rect x="10" y="3" width="7" height="7" transform="rotate(90 10 3)" />
                        <rect width="1" height="1" transform="matrix(-1 0 0 1 7 6)" />
                        <rect x="10" y="14" width="7" height="7"
                            transform="rotate(90 10 14)" />
                        <rect x="6" y="17" width="1" height="1" />
                        <rect x="14" y="20" width="1" height="1" />
                        <rect x="17" y="17" width="1" height="1" />
                        <rect x="14" y="14" width="1" height="1" />
                        <rect x="20" y="17" width="1" height="1" />
                        <rect x="20" y="14" width="1" height="1" />
                        <rect x="20" y="20" width="1" height="1" />
                        <rect x="21" y="3" width="7" height="7" transform="rotate(90 21 3)" />
                        <rect x="17" y="6" width="1" height="1" />
                    </svg>
                    <span class="ml-5">{{ __('Receive') }}</span>
                    {{-- </div> --}}
                </a>





            </div>

        </div>
    </div>
    {{-- Vertical Menu Actions --}}
    <div class="flex justify-center mt-5">
        <div
            class="w-full px-5 max-w-5xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('transfer') }}"
                class="flex cursor-pointer my-4 py-2 px-5 justify-between text-md font-medium text-gray-900 dark:text-white">
                <div class="flex">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg class="w-6 h-6 mb-2 text-gray-500  dark:text-gray-400  {{ areActiveRoutes(['wallet'], 'text-purple-600') }} group-hover:text-purple-600 dark:group-hover:text-purple-500"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M171.574,0H40.851C18.325,0,0,18.325,0,40.851v250.553c0,22.526,18.325,40.851,40.851,40.851h130.723
			c22.526,0,40.851-18.325,40.851-40.851V40.851C212.426,18.325,194.1,0,171.574,0z M196.085,291.404
			c0,13.515-10.996,24.511-24.511,24.511H40.851c-13.515,0-24.511-10.996-24.511-24.511v-13.617h179.745V291.404z M196.085,54.468
			H73.532c-4.513,0-8.17,3.657-8.17,8.17s3.657,8.17,8.17,8.17h122.553v190.638H16.34V70.809h24.511c4.513,0,8.17-3.657,8.17-8.17
			s-3.657-8.17-8.17-8.17H16.34V40.851c0-13.515,10.996-24.511,24.511-24.511h130.723c13.515,0,24.511,10.996,24.511,24.511V54.468z
			" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M471.149,0H340.426c-22.526,0-40.851,18.325-40.851,40.851v250.553c0,22.526,18.325,40.851,40.851,40.851h130.723
			c22.526,0,40.851-18.325,40.851-40.851V40.851C512,18.325,493.675,0,471.149,0z M495.66,261.447h-24.511
			c-4.513,0-8.17,3.657-8.17,8.17c0,4.513,3.657,8.17,8.17,8.17h24.511v13.617c0,13.515-10.996,24.511-24.511,24.511H340.426
			c-13.515,0-24.511-10.996-24.511-24.511v-13.617h122.553c4.513,0,8.17-3.657,8.17-8.17c0-4.513-3.657-8.17-8.17-8.17H315.915
			V70.809H495.66V261.447z M495.66,54.468H315.915V40.851c0-13.515,10.996-24.511,24.511-24.511h130.723
			c13.515,0,24.511,10.996,24.511,24.511V54.468z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M405.787,348.596c-4.513,0-8.17,3.657-8.17,8.17v78.979h-62.638V384c0-4.513-3.657-8.17-8.17-8.17h-38.128
			c-4.513,0-8.17,3.657-8.17,8.17s3.657,8.17,8.17,8.17h29.957v16.34H264.17V384c0-4.513-3.657-8.17-8.17-8.17h-70.808
			c-4.513,0-8.17,3.657-8.17,8.17v51.745h-62.638v-78.979c0-4.513-3.657-8.17-8.17-8.17c-4.513,0-8.17,3.657-8.17,8.17v87.149
			c0,4.513,3.657,8.17,8.17,8.17h70.809v35.404c0,13.515,10.996,24.511,24.511,24.511h108.936c13.515,0,24.511-10.996,24.511-24.511
			v-35.404h70.809c4.513,0,8.17-3.657,8.17-8.17v-87.149C413.957,352.253,410.3,348.596,405.787,348.596z M318.638,487.489
			c0,4.506-3.665,8.17-8.17,8.17H201.532c-4.506,0-8.17-3.665-8.17-8.17V392.17h54.468v24.511c0,4.513,3.657,8.17,8.17,8.17h62.638
			V487.489z" />
                            </g>
                        </g>
                    </svg>
                    <span class="ml-5">{{ __('Transfer') }}</span>
                </div>
                <span><i class="las la-angle-right"></i></span>
            </a>
            <hr />
            <a href="{{ route('wallet') }}"
                class="flex cursor-pointer my-4 py-2 px-5 justify-between text-md font-medium text-gray-900 dark:text-white">
                <div class="flex">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg fill="#000000"
                        class="w-5 h-5 mb-2 text-gray-500  dark:text-gray-400  {{ areActiveRoutes(['wallet'], 'text-purple-600') }} group-hover:text-purple-600 dark:group-hover:text-purple-500"
                        version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <circle cx="407.273" cy="314.182" r="11.636" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M500.364,256h-11.636v-81.455c0-19.782-15.127-34.909-34.909-34.909h-23.273V58.182c0-19.782-15.127-34.909-34.909-34.909
			c-6.982,0-11.636,4.655-11.636,11.636c0,6.982,4.655,11.636,11.636,11.636c6.982,0,11.636,4.655,11.636,11.636v81.455h-34.909
			V58.182c0-19.782-15.127-34.909-34.909-34.909H104.727c-19.782,0-34.909,15.127-34.909,34.909v81.455H34.909
			C15.127,139.636,0,154.764,0,174.545v279.273c0,19.782,15.127,34.909,34.909,34.909h418.909c19.782,0,34.909-15.127,34.909-34.909
			v-46.545c0-6.982-4.655-11.636-11.636-11.636s-11.636,4.655-11.636,11.636v46.545c0,6.982-4.655,11.636-11.636,11.636H34.909
			c-6.982,0-11.636-4.655-11.636-11.636V174.545c0-6.982,4.655-11.636,11.636-11.636h418.909c6.982,0,11.636,4.655,11.636,11.636
			V256H384c-19.782,0-34.909,15.127-34.909,34.909v46.545c0,19.782,15.127,34.909,34.909,34.909h116.364
			c6.982,0,11.636-4.655,11.636-11.636v-93.091C512,260.655,507.345,256,500.364,256z M302.545,139.636H139.636v-25.6
			c9.309-3.491,17.455-11.636,20.945-20.945H281.6c3.491,9.309,11.636,17.455,20.945,20.945V139.636z M349.091,139.636h-23.273
			v-34.909c0-6.982-4.655-11.636-11.636-11.636s-11.636-4.655-11.636-11.636s-4.655-11.636-11.636-11.636H151.273
			c-6.982,0-11.636,4.655-11.636,11.636S134.982,93.091,128,93.091s-11.636,4.655-11.636,11.636v34.909H93.091V58.182
			c0-6.982,4.655-11.636,11.636-11.636h232.727c6.982,0,11.636,4.655,11.636,11.636V139.636z M488.727,349.091H384
			c-6.982,0-11.636-4.655-11.636-11.636v-46.545c0-6.982,4.655-11.636,11.636-11.636h104.727V349.091z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M407.273,186.182H58.182c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h349.091
			c6.982,0,11.636,4.655,11.636,11.636c0,6.982,4.655,11.636,11.636,11.636s11.636-4.655,11.636-11.636
			C442.182,201.309,427.055,186.182,407.273,186.182z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M430.545,395.636c-6.982,0-11.636,4.655-11.636,11.636c0,6.982-4.655,11.636-11.636,11.636H58.182
			c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h349.091c19.782,0,34.909-15.127,34.909-34.909
			C442.182,400.291,437.527,395.636,430.545,395.636z" />
                            </g>
                        </g>
                    </svg>
                    <span class="ml-5">{{ __('Wallet') }}</span>
                </div>
                <span><i class="las la-angle-right"></i></span>
            </a>
            <hr />
            {{-- <a href="{{ route('update_password') }}"
            class="flex cursor-pointer my-4 py-2 px-5 justify-between text-md font-medium text-gray-900 dark:text-white">
            <div class="flex">
                <?xml version="1.0" encoding="iso-8859-1"?>
                <?xml version="1.0" encoding="iso-8859-1"?>
                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                <svg class="w-5 h-5 mb-2 text-gray-500  dark:text-gray-400  {{ areActiveRoutes(['wallet'], 'text-purple-600') }} group-hover:text-purple-600 dark:group-hover:text-purple-500" fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                     viewBox="0 0 297.862 297.862" xml:space="preserve">
                <g>
                    <path d="M182.845,117.396c0,3.039,2.463,5.503,5.502,5.503c3.039,0,5.504-2.464,5.504-5.503c0-18.886-17.234-34.515-39.414-36.759
                        V70.106c0-3.039-2.465-5.504-5.504-5.504c-3.039,0-5.502,2.465-5.502,5.504v10.531c-22.185,2.244-39.42,17.873-39.42,36.759
                        c0,18.884,17.235,34.509,39.42,36.753v51.993c-16.094-2.024-28.414-12.768-28.414-25.684c0-3.039-2.465-5.503-5.504-5.503
                        c-3.039,0-5.502,2.464-5.502,5.503c0,18.887,17.235,34.515,39.42,36.759v10.547c0,3.039,2.463,5.503,5.502,5.503
                        c3.039,0,5.504-2.464,5.504-5.503v-10.547c22.18-2.244,39.414-17.873,39.414-36.759c0-18.886-17.234-34.515-39.414-36.759V91.712
                        C170.527,93.737,182.845,104.481,182.845,117.396z M115.017,117.396c0-12.915,12.32-23.659,28.414-25.684v51.361
                        C127.337,141.049,115.017,130.309,115.017,117.396z M182.845,180.458c0,12.915-12.318,23.659-28.408,25.684v-51.367
                        C170.527,156.799,182.845,167.543,182.845,180.458z"/>
                    <path d="M67.613,9.394c2.148-2.149,2.148-5.633,0-7.782c-2.149-2.148-5.634-2.149-7.783,0L24.607,36.834
                        c0,0-0.001,0.002-0.002,0.002c-0.249,0.249-0.469,0.516-0.66,0.797c-1.243,1.824-1.265,4.23-0.069,6.077
                        c0.093,0.143,0.191,0.281,0.298,0.416c0.02,0.024,0.035,0.05,0.055,0.074c0.071,0.088,0.151,0.17,0.228,0.254
                        c0.051,0.054,0.096,0.111,0.148,0.164c0,0,0,0,0.001,0v0.001L60.26,80.266c1.074,1.074,2.482,1.611,3.891,1.611
                        c1.409,0,2.817-0.537,3.892-1.611c2.149-2.149,2.149-5.634-0.001-7.783L41.784,46.231h227.581c3.039,0,5.503-2.465,5.503-5.504
                        s-2.464-5.502-5.503-5.502H41.782L67.613,9.394z"/>
                    <path d="M230.25,288.467c-2.15,2.149-2.15,5.634,0,7.782c1.074,1.075,2.482,1.612,3.891,1.612s2.816-0.537,3.891-1.612
                        l35.224-35.223c0,0,0.001-0.001,0.003-0.002c2.148-2.15,2.147-5.634-0.002-7.782l-35.654-35.641
                        c-2.149-2.148-5.633-2.148-7.783,0.002c-2.148,2.148-2.147,5.633,0.002,7.782l26.256,26.245H28.497
                        c-3.039,0-5.503,2.464-5.503,5.503c0,3.039,2.464,5.503,5.503,5.503H256.08L230.25,288.467z"/>
                </g>
                </svg>
                <span class="ml-5">{{ __('Transactions') }}</span>
            </div>
            <span><i class="las la-angle-right"></i></span>
        </a>
        <hr> --}}
            <a href="{{ route('transactions') }}"
                class="flex  cursor-pointer my-4 py-2 px-5  justify-between text-md font-medium text-gray-900 dark:text-white  group">
                <div class="flex">
                    <svg fill="#000000"
                        class="w-5 h-5 mb-2 text-gray-500  dark:text-gray-400  {{ areActiveRoutes(['wallet'], 'text-purple-600') }} group-hover:text-purple-600 dark:group-hover:text-purple-500"
                        version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 496 496" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M120,224c46.416,0,86.32-28.392,103.28-68.712C231.32,153.144,239.608,152,248,152c20.304,0,39.56,6.336,56,18.232V256
				h16V96h-19.44L376,26.848L451.44,96H432v176h16V112h44.56L376,5.152L259.44,112H304v39.16c-16.984-9.904-36.048-15.16-56-15.16
				c-6.424,0-12.8,0.608-19.088,1.688C230.864,129.424,232,120.856,232,112C232,50.24,181.76,0,120,0S8,50.24,8,112
				S58.24,224,120,224z M120,16c52.936,0,96,43.064,96,96c0,52.936-43.064,96-96,96c-52.936,0-96-43.064-96-96
				C24,59.064,67.064,16,120,16z" />
                                    <path
                                        d="M112,175.592V192h16v-16.408c17.952-2.016,32-17.112,32-35.592c0-19.848-16.152-36-36-36h-8c-11.032,0-20-8.976-20-20
				s8.968-20,20-20h8c11.032,0,20,8.976,20,20v4h16v-4c0-18.48-14.048-33.576-32-35.592V32h-16v16.408C94.048,50.424,80,65.52,80,84
				c0,19.848,16.152,36,36,36h8c11.032,0,20,8.976,20,20s-8.968,20-20,20h-8c-11.032,0-20-8.976-20-20v-4H80v4
				C80,158.48,94.048,173.576,112,175.592z" />
                                    <rect x="176" y="104" width="16" height="16" />
                                    <rect x="48" y="104" width="16" height="16" />
                                    <path
                                        d="M376,272c-46.416,0-86.32,28.392-103.28,68.712C264.68,342.856,256.392,344,248,344c-20.304,0-39.56-6.336-56-18.232V240
				h-16v160h19.44L120,469.152L44.56,400H64V224H48v160H3.44L120,490.848L236.56,384H192v-39.16c16.984,9.904,36.048,15.16,56,15.16
				c6.424,0,12.8-0.608,19.088-1.688C265.136,366.576,264,375.144,264,384c0,61.76,50.24,112,112,112s112-50.24,112-112
				S437.76,272,376,272z M376,480c-52.936,0-96-43.064-96-96c0-52.936,43.064-96,96-96c52.936,0,96,43.064,96,96
				C472,436.936,428.936,480,376,480z" />
                                    <rect x="432" y="376" width="16" height="16" />
                                    <rect x="304" y="376" width="16" height="16" />
                                    <path
                                        d="M352,361.496V376h-16v16h16v24c0,8.824-7.176,16-16,16v16h80v-16h-52.296c2.736-4.712,4.296-10.176,4.296-16v-24h48v-16
				h-48v-14.504C368,347.44,379.44,336,393.496,336H416v-16h-22.504C370.608,320,352,338.616,352,361.496z" />
                                    <rect x="80" y="384" width="16" height="16" />
                                    <rect x="80" y="240" width="16" height="128" />
                                    <rect x="336" y="96" width="16" height="112" />
                                    <rect x="336" y="224" width="16" height="16" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="ml-5">{{ __('Transactions') }}</span>
                </div>
                <span><i class="las la-angle-right"></i></span>
            </a>



        </div>
    </div>
    @section('script')
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on('click', '.logout', function(e) {

                    event.preventDefault();

                    Swal.fire({
                        title: 'Are you sure to logout?',
                        showCancelButton: true,
                        reverseButtons: true,
                        confirmButtonColor: 'bg-purple-600',
                        confirmButtonText: 'Logout'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.closest('form').submit();
                        }
                    });
                });
            });
        </script>
    @endsection

</x-app-layout>
