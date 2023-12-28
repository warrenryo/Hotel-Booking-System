@extends('layouts.bookingPage.homeOverview')

@section('Booking')

<div class="container mx-auto py-4">
    <div class="flex justify-center items-center">
        <div class="max-w-lg mx-2">
            <button class="text-white bg-blue-700 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown"><span class="text-1xl cursor-pointer">

                </span>Special Rates<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg></button>
            <!-- Dropdown menu 1-->
            <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                <ul class="py-1" aria-labelledby="dropdown">
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Lowest Regular Rate</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Senior Discount</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Promo Code</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Group Code</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- DatePicker -->
        <div class="flex justify-center">
            <div x-data="app()" x-init="initDate();" x-cloak>
                <div class="container mx-auto py-4">
                    <div class="max-w-lg mx-2">
                        <div class="relative" @keydown.escape="closeDatepicker()" @click.away="closeDatepicker()">
                            <div class="flex items-center border rounded-md bg-gray-200">
                                <input type="text" @click="endToShow = 'from'; initDate(); showDatepicker = true" x-model="dateFromValue" :class="{'font-semibold': endToShow == 'from' }" class="focus:outline-none border-0 p-2 w-40 rounded-l-md border-r border-gray-300" />
                                <div class="inline-block px-2 h-full">to</div>
                                <input type="text" @click="endToShow = 'to'; initDate(); showDatepicker = true" x-model="dateToValue" :class="{'font-semibold': endToShow == 'to' }" class="focus:outline-none border-0 p-2 w-40 rounded-r-md border-l border-gray-300" />
                            </div>
                            <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0 z-40" style="width: 17rem" x-show.transition="showDatepicker">

                                <div class="flex justify-between items-center mb-2">
                                    <div>
                                        <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                        <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                    </div>
                                    <div>
                                        <button type="button" class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" @click="if (month == 0) {year--; month=11;} else {month--;} getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <button type="button" class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" @click="if (month == 11) {year++; month=0;} else {month++;}; getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-wrap mb-3 -mx-1">
                                    <template x-for="(day, index) in DAYS" :key="index">
                                        <div style="width: 14.26%" class="px-1">
                                            <div x-text="day" class="text-gray-800 font-medium text-center text-xs"></div>
                                        </div>
                                    </template>
                                </div>

                                <div class="flex flex-wrap -mx-1">
                                    <template x-for="blankday in blankdays">
                                        <div style="width: 14.28%" class="text-center border p-1 border-transparent text-sm"></div>
                                    </template>
                                    <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                        <div style="width: 14.28%">
                                            <div @click="getDateValue(date)" x-text="date" class="p-1 cursor-pointer text-center text-sm leading-none hover:bg-blue-200 leading-loose transition ease-in-out duration-100" :class="{'font-bold': isToday(date) == true, 'bg-blue-800 text-white rounded-l-full': isDateFrom(date) == true, 'bg-blue-800 text-white rounded-r-full': isDateTo(date) == true, 'bg-blue-200': isInRange(date) == true, 'cursor-not-allowed opacity-25': isDisabled(date) }" :disabled="isDisabled(date) ? true : false"></div>
                                        </div>
                                    </template>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Dropdown 2 with Incrementor -->
            <div class="flex justify-center items-center">
                <div class="relative inline-block text-left max-w-lg mx-2">
                    <div>
                        <button id="dropdown-button" type="button" class="inline-flex justify-center w-30 px-10 py-3 text-sm font-medium rounded-lg text-white bg-blue-700 border border-transparent rounded-md hover:bg-gray-700 focus:outline-none focus:ring focus:ring-indigo-200 active:bg-indigo-800">
                            1Rooms,1Adult,1Children
                            <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.293 8.293a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L10 10.414l-2.293 2.293a1 1 0 01-1.414-1.414l3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div id="dropdown-content" class="hidden absolute right-0 w-30 mt-2 py-2 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
                        <div class="p-2">
                            <label for="Rooms" class="block text-sm font-medium text-gray-700">Rooms</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="Quantity" type="number" name="Rooms" class="form-input block w-full sm:text-sm sm:leading-5" value="1">
                            </div>
                        </div>
                        <div class="p-2">
                            <label for="Adults" class="block text-sm font-medium text-gray-700">Adults</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="Quantity" type="number" name="Adults" class="form-input block w-full sm:text-sm sm:leading-5" value="1">
                            </div>
                        </div>
                        <div class="p-2">
                            <label for="Children" class="block text-sm font-medium text-gray-700">Children</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="Quantity" type="number" name="Children" class="form-input block w-full sm:text-sm sm:leading-5" value="1">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ url('room')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3  dark:bg-blue-700 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-blue-800">view rates</a>
            </div>
            
        </div>
    </div>
</div>

<section class="  h-[40vh]">
    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
        <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
            <span x-text="currentIndex"></span>/
            <span x-text="images.length"></span>
        </div>

        <template x-for="(image, index) in images">
            <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <img :src="image" alt="Image" class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                <figcaption class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
                Discover a haven of tranquility and sophistication at Mandra Hotel, 
                a destination that redefines the art of hospitality. Nestled amidst 
                the natural beauty of Manila Bay, our hotel is a sanctuary where every 
                detail is thoughtfully crafted to provide an extraordinary experience for our guests.
                </figcaption>
            </figure>
        </template>

        <button @click="back()" class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                </path>
            </svg>
        </button>

        <button @click="next()" class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </article>
</section>

<div class="text-center h-[30vh] xl:mx-10 xl:mt-[40vh] 2xl:mt-[10vh] 2xl:mx-[30vw]">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl "><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Welcome to</span> Mandra Hotel</h1>
    <p class="text-sm md:text-base lg:text-sm">Experience the perfect combination of comfort with elegance
        at Mandra Hotel. Our Manila lodging is the ideal destination for work, play and relaxation in the
        heart of the country's capital city. Soak up beautiful views of our famous bay sunsets and take advantage
        of our convenient location in downtown Manila, Philippines, near iconic destinations, cultural
        sites and the central business district. Catch up over coffee at &More by Mandra Hotel, share a
        drink at Unspoken Bar or indulge at Manila Bay Kitchen for all-day dining. Elevate your hotel stay
        with a dip in our outdoor pool and whirlpool spa or keep up with your workouts at Mandra Hotel Fitness.
        Get creative in our flexible meeting spaces and set the stage for success with custom catering,
        audiovisual rental equipment and expert on-site event planners. A stylish urban escape awaits
        in the 233 hotel rooms and suites of our hotel with Manila Bay views. Feel connected to the world
        and our downtown community when you stay with us at Mandra Hotel Manila Bay.</p>
</div>

<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <!--Card 1-->
    <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="{{ asset('images/rooms/hakdog.webp') }}" alt="Mountain">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Guest Room, 1 King</div>
            <p class="text-gray-700 text-base">
                Rest in a spacious Manila, Philippines hotel room or suite set amid the scenic downtown cityscape
            </p>
        </div>

    </div>
    <!--Card 2-->
    <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="{{ asset('images/rooms/mnlsb-king-executivesuite-8601-hor-clsc.webp') }}" alt="River">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Guest Room, 2 Twins</div>
            <p class="text-gray-700 text-base">
                Stay productive in your Manila hotel room with a well-lit work desk and ergonomic chair
            </p>
        </div>

    </div>

    <!--Card 3-->
    <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="{{ asset('images/rooms/mnlsb-king-suite-8604-hor-clsc.webp') }}" alt="Forest">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Guest Room, Double</div>
            <p class="text-gray-700 text-base">
                After exploring the historic sights of Manila, freshen up in your large en suite bathroom
            </p>
        </div>

    </div>
</div>
</div>

<div class="text-center p-8 bg-gray-100">
    <h2 class="font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
        Restaurant Tour
    </h2>

    <div class="flex flex-wrap items-center mt-20 text-left text-center">
        <div class="w-full md:w-3/5 lg:w-1/2 px-4">
            <img src="{{ asset('images/dining/dingin1.webp') }}" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
        </div>
        <div class="w-full md:w-2/5 lg:w-1/2 px-4 text-center md:text-left lg:pl-12">
            <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                Welcome to Our Cozy Dining Area
            </h3>
            <p class="sm:text-lg mt-6">
                Step into our dining area, where every meal is a celebration
                of flavors, community, and warmth. Nestled in the heart of
                our establishment, our dining space is designed to create
                a comfortable and inviting atmosphere for you and your loved ones
            </p>
        </div>
    </div>

    <div class="flex flex-wrap items-center mt-20 text-left text-center">
        <div class="w-full md:w-3/5 lg:w-1/2 px-4">
            <img src="{{ asset('images/dining/food.webp') }}" alt="project members" class="inline-block rounded shadow-lg border border-merino-400">
        </div>
        <div class="w-full md:w-2/5 lg:w-1/2 px-4 md:order-first text-center md:text-left lg:pr-12">
            <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                Indulge in Culinary Bliss: A Symphony of Flavors Awaits You
            </h3>
            <p class="sm:text-lg mt-6">
                Prepare your taste buds for an unforgettable
                journey as we present a culinary masterpiece that
                transcends the ordinary. Our menu is a meticulously
                crafted symphony of textures, aromas, and tastes,
                promising an indulgent experience that will leave you craving for more.
            </p>
        </div>
    </div>

    <div class="flex flex-wrap items-center mt-20 text-left  text-center">
        <div class="w-full md:w-3/5 lg:w-1/2 px-4">
            <img src="{{ asset('images/dining/dining6.jpg') }}" alt="editor" class="inline-block rounded shadow-lg border border-merino-400">
        </div>
        <div class="w-full md:w-2/5 lg:w-1/2 px-4 text-center md:text-left lg:pl-12">
            <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                Awaken Your Senses in Our Coffee Oasis
            </h3>
            <p class="sm:text-lg mt-6">
                Welcome to our dedicated coffee area, where
                the rich aroma of freshly ground beans and the
                soothing hum of conversation create a haven for
                coffee enthusiasts and seekers of cozy moments.
                Immerse yourself in the warm embrace of our café,
                where every cup tells a story of craftsmanship,
                community, and the simple joy of a well-brewed coffee
            </p>
        </div>
    </div>
</div>







<!-- Dropdown menu 1-->
<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>

<!-- Dropdown menu 2 with Incrementor-->
<script>
    const dropdownButton = document.getElementById('dropdown-button');
    const dropdownContent = document.getElementById('dropdown-content');
    const quantityInput = document.getElementById('Quantity');

    // Toggle the dropdown content when the button is clicked
    dropdownButton.addEventListener('click', () => {
        dropdownContent.classList.toggle('hidden');
    });
</script>

<!-- Incrementor -->
<script>
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
</script>

<!-- Checkbox -->
<script>
    const checkbox = document.getElementById('myCheckbox');

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            // Checkbox is checked
            // You can perform actions here when the checkbox is checked
            console.log('Checkbox is checked');
        } else {
            // Checkbox is unchecked
            // You can perform actions here when the checkbox is unchecked
            console.log('Checkbox is unchecked');
        }
    });
</script>

<!-- datepicker start -->
<script>
    const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    function app() {
        return {
            showDatepicker: false,
            dateFromYmd: '',
            dateToYmd: '',
            dateFromValue: '',
            dateToValue: '',
            currentDate: null,
            dateFrom: null,
            dateTo: null,
            endToShow: '',
            month: '',
            year: '',
            no_of_days: [],
            blankdays: [],

            convertFromYmd(dateYmd) {
                const year = Number(dateYmd.substr(0, 4));
                const month = Number(dateYmd.substr(5, 2)) - 1;
                const date = Number(dateYmd.substr(8, 2));

                return new Date(year, month, date);
            },

            convertToYmd(dateObject) {
                const year = dateObject.getFullYear();
                const month = dateObject.getMonth() + 1;
                const date = dateObject.getDate();

                return year + "-" + ('0' + month).slice(-2) + "-" + ('0' + date).slice(-2);
            },

            initDate() {
                if (!this.dateFrom) {
                    if (this.dateFromYmd) {
                        this.dateFrom = this.convertFromYmd(this.dateFromYmd);
                        //} else if ( this.endToShow ) {
                        //	this.dateFrom = new Date();
                    }
                }
                if (!this.dateTo) {
                    if (this.dateToYmd) {
                        this.dateTo = this.convertFromYmd(this.dateToYmd);
                        //} else if ( this.endToShow ) {
                        //	this.dateTo = new Date();
                    }
                }
                if (!this.dateFrom) {
                    this.dateFrom = this.dateTo;
                }
                if (!this.dateTo) {
                    this.dateTo = this.dateFrom;
                }
                if (this.endToShow === 'from' && this.dateFrom) {
                    this.currentDate = this.dateFrom;
                } else if (this.endToShow === 'to' && this.dateTo) {
                    this.currentDate = this.dateTo;
                } else {
                    this.currentDate = new Date();
                }
                currentMonth = this.currentDate.getMonth();
                currentYear = this.currentDate.getFullYear();
                if (this.month !== currentMonth || this.year !== currentYear) {
                    this.month = currentMonth;
                    this.year = currentYear;
                    this.getNoOfDays();
                }
                this.setDateValues();
            },

            isToday(date) {
                const today = new Date();
                const d = new Date(this.year, this.month, date);

                return today.toDateString() === d.toDateString();
            },

            isDateFrom(date) {
                const d = new Date(this.year, this.month, date);

                return d.toDateString() === this.dateFromValue;
            },

            isDateTo(date) {
                const d = new Date(this.year, this.month, date);

                return d.toDateString() === this.dateToValue;
            },

            isInRange(date) {
                const d = new Date(this.year, this.month, date);

                return d > this.dateFrom && d < this.dateTo;
            },

            isDisabled(date) {
                const d = new Date(this.year, this.month, date);

                if (this.endToShow === 'from' && this.dateTo && d > this.dateTo) {
                    return true;
                }
                if (this.endToShow === 'to' && this.dateFrom && d < this.dateFrom) {
                    return true;
                }

                return false;
            },

            setDateValues() {
                if (this.dateFrom) {
                    this.dateFromValue = this.dateFrom.toDateString();
                    this.dateFromYmd = this.convertToYmd(this.dateFrom);
                }
                if (this.dateTo) {
                    this.dateToValue = this.dateTo.toDateString();
                    this.dateToYmd = this.convertToYmd(this.dateTo);
                }
            },

            getDateValue(date) {
                let selectedDate = new Date(this.year, this.month, date);
                if (this.endToShow === 'from' && (!this.dateTo || selectedDate <= this.dateTo)) {
                    this.dateFrom = selectedDate;
                    if (!this.dateTo) {
                        this.dateTo = selectedDate;
                    }
                } else if (this.endToShow === 'to' && (!this.dateFrom || selectedDate >= this.dateFrom)) {
                    this.dateTo = selectedDate;
                    if (!this.dateFrom) {
                        this.dateFrom = selectedDate;
                    }
                }
                this.setDateValues();

                this.closeDatepicker();
            },

            getNoOfDays() {
                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                // find where to start calendar day of week
                let dayOfWeek = new Date(this.year, this.month).getDay();
                let blankdaysArray = [];
                for (var i = 1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                }

                let daysArray = [];
                for (var i = 1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }

                this.blankdays = blankdaysArray;
                this.no_of_days = daysArray;
            },

            closeDatepicker() {
                this.endToShow = '';
                this.showDatepicker = false;
            }
        }
    }
</script>
<!-- datepicker end -->

<!-- Carousel -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
                'images/rooms/mnlsb-king-executivesuite-8601-hor-clsc.webp',
                'images/rooms/mnlsb-twin-guestroom-8585-hor-clsc.webp',
                'images/rooms/mnlsb-twin-guestroom-8591-hor-clsc.webp',
                'images/rooms/mnlsb-king-suite-8604-hor-clsc.webp',
                'images/rooms/mnlsb-king-guestroom-8584-hor-clsc.webp'
            ],
            back() {
                if (this.currentIndex > 1) {
                    this.currentIndex = this.currentIndex - 1;
                }
            },
            next() {
                if (this.currentIndex < this.images.length) {
                    this.currentIndex = this.currentIndex + 1;
                } else if (this.currentIndex <= this.images.length) {
                    this.currentIndex = this.images.length - this.currentIndex + 1
                }
            },
        }))
    })
</script>
<!-- Carousel end-->

@endsection