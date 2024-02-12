@section('title', 'Notifications')
<x-app-layout>

    {{-- Transactions lists --}}
    <div class="infinite-scroll">
        <div class="flex justify-center flex-col items-center">
            @forelse ($notifications as $notification)
                <div
                    class="w-full  mb-2 py-2 px-5 max-w-5xl {{ $notification->read_at ? 'bg-white' : 'bg-gray-100' }} border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                    <a href="{{ route('notifications.detail', $notification->id) }}"
                        class="flex cursor-pointer mt-2 items-center justify-between font-medium text-gray-900 dark:text-white">
                        <div class="flex w-full">
                            <svg class="d-none md:d-block w-6 h-6 mr-2 mt-2 text-gray-500 dark:text-gray-400 group-hover:text-purple-600 dark:group-hover:text-purple-500"
                                viewBox="0 0 24 24" fill="{{ $notification->read_at ? 'none' : '#ef4444'  }}" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.31317 12.463C6.20006 9.29213 8.60976 6.6252 11.701 6.5C14.7923 6.6252 17.202 9.29213 17.0889 12.463C17.0889 13.78 18.4841 15.063 18.525 16.383C18.525 16.4017 18.525 16.4203 18.525 16.439C18.5552 17.2847 17.9124 17.9959 17.0879 18.029H13.9757C13.9786 18.677 13.7404 19.3018 13.3098 19.776C12.8957 20.2372 12.3123 20.4996 11.701 20.4996C11.0897 20.4996 10.5064 20.2372 10.0923 19.776C9.66161 19.3018 9.42346 18.677 9.42635 18.029H6.31317C5.48869 17.9959 4.84583 17.2847 4.87602 16.439C4.87602 16.4203 4.87602 16.4017 4.87602 16.383C4.91795 15.067 6.31317 13.781 6.31317 12.463Z"
                                    stroke="#9333ea" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M9.42633 17.279C9.01212 17.279 8.67633 17.6148 8.67633 18.029C8.67633 18.4432 9.01212 18.779 9.42633 18.779V17.279ZM13.9757 18.779C14.3899 18.779 14.7257 18.4432 14.7257 18.029C14.7257 17.6148 14.3899 17.279 13.9757 17.279V18.779ZM12.676 5.25C13.0902 5.25 13.426 4.91421 13.426 4.5C13.426 4.08579 13.0902 3.75 12.676 3.75V5.25ZM10.726 3.75C10.3118 3.75 9.97601 4.08579 9.97601 4.5C9.97601 4.91421 10.3118 5.25 10.726 5.25V3.75ZM9.42633 18.779H13.9757V17.279H9.42633V18.779ZM12.676 3.75H10.726V5.25H12.676V3.75Z"
                                    fill="#9333ea" />

                            </svg>
                            <div class="w-full">
                                <p class="font-bold p-0 text-xs md:text-md truncate">
                                    {{-- {{ Str::limit($notification->data['title'], 30, '...') }} --}}
                                    {{ $notification->data['title'] }}
                                </p>
                                {{-- <br> --}}
                                <p class="text-muted text-xs mt-1 truncate">
                                    {{ $notification->data['message']  }}
                                    {{-- {{ Str::limit($notification->data['message'] , 50, '...')  }} --}}
                                </p>
                                {{-- <br> --}}
                                <p class="text-right">
                                    <small class="text-gray-600">{{ $notification->created_at->diffForHumans() }}</small>
                                </p>
                            </div>
                            
                        </div>
                    </a>

                </div>
            @empty
            <div
            class="w-full py-5 px-10 max-w-5xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-center">
            <?xml version="1.0" encoding="utf-8"?>
            <!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 1180.7 781.6" style="enable-background:new 0 0 1180.7 781.6;" xml:space="preserve" width="406"
                 height="306">
            <style type="text/css">
                .st0{fill:none;}
                .st1{fill:#D1E2FA;}
                .st2{fill:#FADED6;}
                .st3{fill:#5AB8FD;}
                .st4{fill:#246A84;}
                .st5{fill:#0097FA;}
                .st6{fill:#58B9F4;}
                .st7{fill:#36436C;}
                .st8{fill:#0073C3;}
                .st9{fill:#2A3952;}
            </style>
            <title>nothing</title>
            <rect y="0" class="st0" width="1180.7" height="781.6"/>
            <path class="st1" d="M961.4,379.3c0,147.6-84.3,275.5-207.4,338.2c-19.6,10-40.3,18.3-61.7,24.8c0,0,0,0,0,0c0,0-0.1,0-0.1,0
                c-4.8,1.5-9.6,2.8-14.5,4.1c-15.1,3.9-30.6,7-46.4,9c-0.5,0.1-0.9,0.1-1.4,0.2c-15.6,2-31.6,3-47.8,3c-2,0-4,0-5.9,0
                c-2.3,0-4.5-0.1-6.8-0.2c-3.8-0.1-7.7-0.3-11.5-0.5l-0.1,0c-49.5-3.1-96.3-15.7-138.9-36c-127.8-61-216.2-191.4-216.2-342.5
                C202.8,169.8,372.6,0,582.1,0S961.4,169.8,961.4,379.3z"/>
            <path class="st2" d="M543,225.4c0,0,9.1-4.3,4.1-58.3c0.4-57.3-3.8-88.5,43.6-94.5c41.9,1.7,55.6,22.2,56.4,33.8L648,118
                c0,0-4.1,55.3-3.6,57s1.1,26.2,1.1,26.2s0.9,19.4-2.6,25.1s-8.5,13.1-12.3,14.8s-8.5,4.3-8.5,4.3s7.7,24.8,4.3,37.3
                C624.3,291.3,540.2,283.9,543,225.4z"/>
            <path class="st3" d="M557.8,757.9c-7.9-159.5-15.8-319-23.6-478.7v0l-0.2-3.8c0,0-6.9-11.4-6.1-22.8c0.5-6.6,0-13.3-1.5-19.8
                c0,0-99.7,68.4-101.9,72.3c-2.1,3.6-2,358.2-5.6,416.8C461.4,742.1,508.3,754.7,557.8,757.9L557.8,757.9z"/>
            <path class="st2" d="M129.9,632.3c0,0-0.2,1.6-8.6,9.1c-4.2,3.7-8,7.8-18.3,12.3c-4.3,1.9-17.4,12.5-19.4,15.1
                c-4.3,5.9-6.8,8.2-17,21.8c-7.4,9.8-26.2,17.3-14.6-0.5c3.5-5.2,7.4-10.2,11.7-14.9c2.8-3.2,5.7-6.4,8.7-9.5
                c1.6-1.7,3.2-3.3,4.8-4.9s3.9-3.2,5.1-5.1c-4.1,0.4-8.1,5.5-11.1,8c-5.2,4.5-10.2,9.1-15.1,13.8c-4.7,4.3-8.9,9.1-13.6,13.3
                c-2.4,2-8.8,8.3-12.4,5.9c-5.1-3.4,18.5-38.2,36.8-44.5c-5.8,2-10.8,5.9-15.9,9.2c-6.5,4.1-12.5,8.8-18,14.2
                c-3.8,3.8-9.4,12.4-15.6,7.9c-3.2-2.3-4.9-8.2-1.8-11.3c4.6-4.6,9.3-9,14-13.4c5.4-5,10.8-10.1,16.6-14.5c0.9-0.8,1.9-1.4,2.9-1.8
                c-0.4,2.4-5.3,4-7,5.1c-7.7,5-15.7,10.2-24.1,14.2c-3.7,1.7-8.1,4.1-12.2,4.5c-2.7,0.4-5.3-1.5-5.7-4.2c-0.2-1,0-2.1,0.5-3.1
                c2.1-4,7.2-6.7,11.1-8.4c8.8-3.7,18.1-5.3,26.5-9.9c8-4.3,14.9-10.3,20.4-17.6c-3.3,2.9-6.7,5.7-10.1,8.5
                c-4.5,3.7-9.3,8.3-14.6,10.7c-0.5,0.2-1.3,0.7-1.8,0.5c-2.6-1.1-17.1-8.3,23.4-42.5c0,0,21.4-19.7,57-11.1
                C157.2,600,129.9,632.3,129.9,632.3z"/>
            <path class="st3" d="M466.5,433c0,0-30.4,168.8-129.3,193.1S135,641.3,135,641.3s-33.5-36.5-27.4-65.4s167.3-39.5,184-70
                S427,302.2,427,302.2S483.3,360,466.5,433z"/>
            <path class="st4" d="M646,141.1c25.7-1.5,285.8-33.8,285.8-33.8s6.2,78-0.4,77.5S646,152.6,646,152.6c-3.8-1.3-5.9-3.7-5.7-6.2
                C640.7,143,645.5,141.2,646,141.1z"/>
            <path class="st4" d="M913.8,145.5c0,21.9,9.7,39.7,21.6,39.7s21.6-17.8,21.6-39.7s-9.7-39.7-21.6-39.7c-1.5,0-3,0.3-4.4,0.8
                C921.3,110.3,913.8,126.3,913.8,145.5z"/>
            <ellipse class="st5" cx="935.4" cy="145.1" rx="16.5" ry="31.5"/>
            <path class="st2" d="M823.9,188.2c0,0,1.5-12.4,7.2-46.1c6.9-41.3-11.7-52.8-49.2-18.9s14.6,79,14.6,79L823.9,188.2z"/>
            <path class="st6" d="M708.9,421.3c0,0,56.5,108.2,127.8,106.5c156.6-3.8,3-319.4-7.6-343.7c-1.5,4.6-22-8.8-47.9-1.1
                s14.7,164.3,5.7,154c-69.7-80-75.3-77.6-75.3-77.6L708.9,421.3z"/>
            <path class="st7" d="M692.2,742.4c-4.8,1.5-9.6,2.8-14.5,4.1c-15.1,3.9-30.6,7-46.4,9c-0.5,0.1-0.9,0.1-1.4,0.2
                c-15.6,2-31.6,3-47.8,3c-2,0-4,0-5.9,0c-2.3,0-4.5-0.1-6.8-0.2c-8.6-159.3-17.1-318.7-25.7-478.2c-0.7-12.3-1.3-24.5-2-36.8l5.7,2.3
                c0,0,12.4,34.9,74,37.6c0.4,0,0.9,0,1.3,0.1c3.4-21.7-1.9-36.8-1.9-36.8l9.6-11.1c0,0,2.1,0.3,5.3,1.7c4.5,2,11.1,6,17.4,14.3
                l0.1,0.1c4.1,5.5,8.2,12.8,11.3,22.6c3.3,10.5,5.7,23.8,6.1,40.6C672.1,381.6,689.1,687.8,692.2,742.4z"/>
            <path class="st8" d="M557.8,757.9c3.8,0.2,7.6,0.4,11.5,0.5c2.3,0.1,4.5,0.1,6.8,0.2l-21.6-477.2l-10.9-1.2l-9.3-1l-0.1,0
                L557.8,757.9L557.8,757.9z"/>
            <path class="st8" d="M692.3,742.4c0,0-0.1,0-0.1,0c-4.8,1.5-9.6,2.8-14.5,4.1l-30-473.5l16.8,1l3.5,0.2l1.2,0.1l11.3,228.6l0.4,8.1
                l0.3,5.2c0,1,0.1,2,0.1,3c0,1,0.1,1.9,0.1,2.9l0.3,5.8c0.1,1.9,0.2,3.8,0.3,5.8l0.3,5.1c0,1.2,0.1,2.3,0.2,3.5l0.4,8.1
                c0,0.9,0.1,1.8,0.1,2.7l0.3,5.4c0,0.9,0.1,1.8,0.1,2.7l0.4,8c0.6,11.6,1.1,23,1.7,34.1c0.1,1.1,0.1,2.1,0.2,3.2
                c0.1,2.2,0.2,4.4,0.3,6.6c0.1,1.5,0.1,2.9,0.2,4.3c0.1,2.7,0.3,5.4,0.4,8c0.1,1.6,0.2,3.2,0.2,4.9c0.3,5.6,0.6,11.1,0.8,16.5
                c0.1,1.8,0.2,3.5,0.3,5.3c0.1,2.8,0.3,5.5,0.4,8.3l0.2,4.4c0.1,2.9,0.3,5.7,0.4,8.5l0.6,12.1c0,0.7,0.1,1.3,0.1,1.9l0.2,3.8
                c0.2,4.4,0.4,8.6,0.6,12.6c0.1,1.1,0.1,2.3,0.2,3.4c0.2,3.9,0.4,7.6,0.5,11c0.1,2,0.2,3.9,0.3,5.7c0.4,7.7,0.7,14,0.9,18.6
                L692.3,742.4z"/>
            <path class="st3" d="M754,717.5c-19.6,10-40.3,18.3-61.7,24.8c0-0.1,0-0.2,0-0.3c-0.2-4.6-0.5-10.9-0.9-18.6
                c-0.1-1.8-0.2-3.7-0.3-5.7c-0.2-3.5-0.4-7.1-0.5-11c-0.1-1.1-0.1-2.2-0.2-3.4c-0.2-4-0.4-8.2-0.6-12.6l-0.2-3.8
                c0-0.6-0.1-1.3-0.1-1.9c-0.2-3.9-0.4-8-0.6-12.1c-0.1-2.8-0.3-5.6-0.4-8.5l-0.2-4.4c-0.1-2.7-0.3-5.5-0.4-8.3
                c-0.1-1.7-0.2-3.5-0.3-5.3c-0.3-5.4-0.5-10.9-0.8-16.5c-0.1-1.6-0.2-3.2-0.2-4.9c-0.1-2.6-0.3-5.3-0.4-8c-0.1-1.4-0.1-2.9-0.2-4.3
                c-0.1-2.2-0.2-4.4-0.3-6.6c0-1.1-0.1-2.1-0.2-3.2c-0.5-11.1-1.1-22.5-1.7-34.1l-0.4-8c0-0.9-0.1-1.8-0.1-2.7l-0.3-5.4
                c0-0.9-0.1-1.8-0.1-2.7l-0.4-8.1c-0.1-1.2-0.1-2.3-0.2-3.5l-0.3-5.1c-0.1-1.9-0.2-3.8-0.3-5.8l-0.3-5.8c0-1-0.1-1.9-0.1-2.9
                c-5.7-115.3-11.5-231.4-11.9-236.2c-0.2-3-0.6-5.8-1.4-8.6c-1.9-7.2-6.1-14.3-14.9-22.8l-0.1-0.1c-4.5-4.3-10.2-9-17.4-14.3
                c-6.3-4.5-13.7-9.5-22.5-15c1.8,0.4,120.1,24.6,121.7,66.9C736.2,327.9,751.4,660.3,754,717.5z"/>
            <path class="st5" d="M542.8,225.1l11.8,56.3c0,0-16.5,1.1-20.3-2.3c-5.8-5-10.3-31.9-7.8-46.4C527.6,225.9,542.8,225.1,542.8,225.1z
                "/>
            <path class="st5" d="M668,274.3c-10.4-43.7-29.6-42.3-39.1-45.2c-8.5-2.6-24-4-11.4,6.3s30.2,37.6,30.2,37.6"/>
            <path class="st9" d="M546.4,168.4c0,0,9.4,0.9,10.5,0.6s-7.1-18.8-0.6-19.4s11.1,1.7,10,15.7s0.9,47.2,6.4,54.9s12.3,31.2,47.9,26.3
                c8.4-1.1,10.1-4,12.6-6.5c12.9-13,18.6-8,10.9-59.6c-2.3-2.6-20.2-18.3-43.9,11.7c-8.5,7.7-24.2,8.6-24.8-6.3s-1.1-47.9-1.1-47.9
                s10.5-24.5,2.6-31.9s-25.1-10.3-25.1-10.3s-3.1,2.9-4.7,27.3C546.5,133.4,546.3,151.4,546.4,168.4z"/>
            <path class="st3" d="M631.3,755.4c-0.5,0.1-0.9,0.1-1.4,0.2l-8.5-472.4l0-0.4l1.3,0.1l0,0.4L631.3,755.4z"/>
            <path class="st3" d="M547.5,118.5c0,0-0.5-32.4,19.5-40.3c21.2-8.3,48.7-9.8,72.7,10.7c0,0,5.9,6.9,8,14.1
                c0.5,1.5,1.4,13.5,1.4,13.5c-16.4,3.3-33,5.3-49.7,5.8c-6.4,0.2-12.6,0.1-18.5-0.1c-11.2-0.4-22.4-1.5-33.4-3.3"/>
            <path class="st3" d="M678.8,122.7l-89.4-0.8c0,0,30.2,0.2,59.7-5.3c28.4-0.2,32.7-5.3,35.3-1.9S678.8,122.7,678.8,122.7z"/>
            </svg>
            </div>
            <div class="text-center font-semibold">
                    {{ __('There is No Notification') }}
            </div>
            </div>
            
            @endforelse

            {{-- @endforeach --}}
            <ul class="pagination flex">
                {{ $notifications->links() }}
            </ul>

        </div>
    </div>


    @section('script')
        <script>
            $('ul.pagination').hide();
            $(function() {
                $('.infinite-scroll').jscroll({
                    autoTrigger: true,
                    loadingHtml: '<img class="mx-auto" width="50px" src="{{ asset('image/animation_loading.gif') }}" alt="Loading..." />',
                    padding: 0,
                    nextSelector: 'a[rel="next"]',
                    contentSelector: 'div.infinite-scroll',
                    callback: function() {
                        $('ul.pagination').remove();
                    }
                });
            });
        </script>
    @endsection

</x-app-layout>
