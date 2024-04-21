
<div class="p-4 sm:ml-64">
   <div class="p-4  border-gray-200  rounded-lg  mt-14">
                  <div class="card-section flex justify-left items-center flex-wrap">

               <div class="event-card h-20 w-52 p-2 bg-white shadow-lg rounded-lg m-2 flex justify-between items-center">
               <div class="icon bg-[#47B5FF] w-20 h-full rounded-md flex justify-center items-center">
                  <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8.737 8.737a21.49 21.49 0 0 1 3.308-2.724m0 0c3.063-2.026 5.99-2.641 7.331-1.3 1.827 1.828.026 6.591-4.023 10.64-4.049 4.049-8.812 5.85-10.64 4.023-1.33-1.33-.736-4.218 1.249-7.253m6.083-6.11c-3.063-2.026-5.99-2.641-7.331-1.3-1.827 1.828-.026 6.591 4.023 10.64m3.308-9.34a21.497 21.497 0 0 1 3.308 2.724m2.775 3.386c1.985 3.035 2.579 5.923 1.248 7.253-1.336 1.337-4.245.732-7.295-1.275M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                  </svg>

               </div>
               <div class="content text-center">
               <?php
                  $eventCounter=0;
                  require("../config/configer.php");
                  $readData = "SELECT * FROM `events`";
                  $query=mysqli_query($connect,$readData);

                  while($data = mysqli_fetch_assoc($query)){
                     $eventCounter++;
                  }
                  ?>
                  <h1 class="text-[#47B5FF] text-3xl font-bold"><?php echo $eventCounter; ?></h1>
                  <p class="text-[#47B5FF] dark:text-[#47B5FF] font-bold">Total Events</p>
               </div>
               </div>
               
               <div class="jobs-card h-20 w-52 p-2 bg-white shadow-lg rounded-lg m-2 flex justify-between items-center">
               <div class="icon bg-[#9A55F3] w-20 h-full rounded-md flex justify-center items-center">
               <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m5 4-2 2 2 2m4-4 2 2-2 2m5-12v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
               </svg>

               </div>
               <div class="content text-center">
                  <h1 class="text-3xl text-[#9A55F3] font-bold">12</h1>
                  <p class="text-[#9A55F3] font-bold">Posted Job</p>
               </div>
               </div>
               <div class="gallery-card h-20 w-52 p-2 bg-white shadow-lg rounded-lg m-2 flex justify-between items-center">
               <div class="icon bg-[#FF731D] w-20 h-full rounded-md flex justify-center items-center">
               <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z" clip-rule="evenodd"/>
                  </svg>


                  </div>
                  <div class="content text-center">
                  <?php
                     $readData = "SELECT * FROM `gallery`";
                     $galleryCount=0;
                     $query=mysqli_query($connect,$readData);
                     while($data = mysqli_fetch_assoc($query)){
                     $galleryCount++;
                     }
                     ?>
                     <h1 class="text-3xl text-[#FF731D] font-bold"><?php echo $galleryCount; ?></h1>
                     <p class="text-[#FF731D] font-bold">All Photos</p>
                  </div>
               </div>
      
               <div class="chart-section flex justify-left p-2 m-2  items-center flex-wrap">
               <div class="graph m-2 shadow-lg">            
                     <div class="max-w-sm w-full bg-white rounded-lg shadow  p-4 md:p-6">
                        <div class="flex justify-between">
                        <div>
                           <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-[#47B5FF] pb-2">2</h5>
                           <p class="text-base font-normal text-gray-500 dark:text-[#47B5FF]">Events this week</p>
                        </div>
                        <div
                           class="flex items-center px-2.5 py-0.5 text-base font-semibold text-[#47B5FF] dark:text-[#47B5FF] text-center">
                           12%
                           <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                           </svg>
                        </div>
                        </div>
                        <div id="area-chart"></div>
                        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                        <div class="flex justify-between items-center pt-5">
                           <!-- Button -->
                           <button
                              id="dropdownDefaultButton"
                              data-dropdown-toggle="lastDaysdropdown"
                              data-dropdown-placement="bottom"
                              class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-[#47B5FF]"
                              type="button">
                              Last 7 days
                              <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                              </svg>
                           </button>
                           <!-- Dropdown menu -->
                           <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                 <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                 </li>
                                 <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                 </li>
                                 <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                                 </li>
                                 <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                                 </li>
                                 <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                                 </li>
                              </ul>
                           </div>
                           <a
                              href="#"
                              class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-[#47B5FF] hover:text-white dark:hover:text-white hover:bg-[#47B5FF] dark:hover:bg-[#47B5FF] dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                              Events Report
                              <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                              </svg>
                           </a>
                        </div>
                        </div>
                     </div>
               </div>
                  <div class="event-chart m-2 shadow-lg">
                  
                     <div class="max-w-sm w-full bg-white rounded-lg shadow  p-4 md:p-6">
                        <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                           <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-[#E8AA42] flex items-center justify-center me-3">
                              <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                              <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                              <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                              </svg>
                           </div>
                           <div>
                              <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-[#E8AA42] pb-1">11</h5>
                              <p class="text-sm font-normal text-[#E8AA42] dark:text-[#E8AA42]">Alumni in this week</p>
                           </div>
                        </div>
                        <div>
                           <span class="bg-[#E8AA42] text-white text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-[#E8AA42] dark:text-white">
                              <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                              </svg>
                              42.5%
                           </span>
                        </div>
                        </div>

                        <div class="grid grid-cols-2">
                        <dl class="flex items-center">
                              <dt class="text-[#E8AA42] dark:text-[#E8AA42] text-sm font-normal me-1">Alumni:</dt>
                              <dd class="text-[#E8AA42] text-sm dark:text-[#E8AA42] font-semibold">11</dd>
                        </dl>
                        <dl class="flex items-center justify-end">
                              <dt class="text-[#E8AA42] dark:text-[#E8AA42] text-sm font-normal me-1">Admin:</dt>
                              <dd class="text-[#E8AA42] text-sm dark:text-[#E8AA42] font-semibold">3</dd>
                        </dl>
                        </div>

                        <div id="column-chart"></div>
                        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                           <div class="flex justify-between items-center pt-5">
                              <!-- Button -->
                              <button
                              id="dropdownDefaultButton"
                              data-dropdown-toggle="lastDaysdropdown"
                              data-dropdown-placement="bottom"
                              class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-[#E8AA42]"
                              type="button">
                              Last 7 days
                              <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                              </svg>
                              </button>
                              <!-- Dropdown menu -->
                              <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                 <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                    </li>
                                    <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                    </li>
                                    <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                                    </li>
                                    <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                                    </li>
                                    <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                                    </li>
                                 </ul>
                              </div>
                              <a
                              href="#"
                              class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-[#E8AA42] hover:text-[#E8AA42] dark:hover:text-white hover:bg-[#E8AA42] dark:hover:bg-[#E8AA42] dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                              Alumni Report
                              <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                              </svg>
                              </a>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="job-chart m-2 shadow-lg">
                     
                  <div class="max-w-sm w-full bg-white rounded-lg shadow  p-4 md:p-6">
                     <div class="flex justify-between mb-5">
                        <div>
                        <h5 class="leading-none text-3xl font-bold text-[#9A55F3] dark:text-[#9A55F3] pb-2">12</h5>
                        <p class="text-base font-normal text-gray-500 dark:text-[#9A55F3]">Posted Jobs this week</p>
                        </div>
                        <div
                        class="flex items-center px-2.5 py-0.5 text-base font-semibold text-[#9A55F3] dark:text-[#9A55F3] text-center">
                        23%
                        <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                        </svg>
                        </div>
                     </div>
                     <div id="size-chart" class="[&>div]:mx-auto"></div>
                     <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5">
                        <div class="flex justify-between items-center pt-5">
                        <!-- Button -->
                        <button
                           id="dropdownDefaultButton"
                           data-dropdown-toggle="lastDaysdropdown"
                           data-dropdown-placement="bottom"
                           class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-[#9A55F3] text-center inline-flex items-center dark:hover:text-[#9A55F3]"
                           type="button">
                           Last 7 days
                           <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                           </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                              <li>
                                 <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                              </li>
                              <li>
                                 <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                              </li>
                              <li>
                                 <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                              </li>
                              <li>
                                 <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                              </li>
                              <li>
                                 <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                              </li>
                              </ul>
                        </div>
                        <a
                           href="#"
                           class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-[#9A55F3] hover:text-white dark:hover:text-white  hover:bg-[#9A55F3] dark:hover:bg-[#9A55F3] dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                           Posted Jobs Report
                           <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                           </svg>
                        </a>
                        </div>
                     </div>
                  </div>

                  </div>
               </div>
               </div>
               </div> 
  
   </div>
</div>
<script>
  const optionsOne = {
  chart: {
    height: "90%",
    maxWidth: "100%",
    type: "area",
    fontFamily: "Inter, sans-serif",
    dropShadow: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
  },
  tooltip: {
    enabled: true,
    x: {
      show: false,
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.55,
      opacityTo: 0,
      shade: "#1C64F2",
      gradientToColors: ["#1C64F2"],
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    width: 6,
  },
  grid: {
    show: false,
    strokeDashArray: 4,
    padding: {
      left: 2,
      right: 2,
      top: 0
    },
  },
  series: [
    {
      name: "Events",
      data: [1, 3, 4, 7, 9, 10],
      color: "#1A56DB",
    },
  ],
  xaxis: {
    categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
    labels: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
  },
  yaxis: {
    show: false,
  },
}

if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("area-chart"), optionsOne);
  chart.render();
}

//this is alumni section

const optionsTwo = {
  colors: ["#1A56DB", "#FDBA8C"],
  series: [
    {
      name: "Organic",
      color: "#1A56DB",
      data: [
        { x: "Mon", y: 231 },
        { x: "Tue", y: 122 },
        { x: "Wed", y: 63 },
        { x: "Thu", y: 421 },
        { x: "Fri", y: 122 },
        { x: "Sat", y: 323 },
        { x: "Sun", y: 111 },
      ],
    },
    {
      name: "Social media",
      color: "#FDBA8C",
      data: [
        { x: "Mon", y: 232 },
        { x: "Tue", y: 113 },
        { x: "Wed", y: 341 },
        { x: "Thu", y: 224 },
        { x: "Fri", y: 522 },
        { x: "Sat", y: 411 },
        { x: "Sun", y: 243 },
      ],
    },
  ],
  chart: {
    type: "bar",
    height: "200px",
    fontFamily: "Inter, sans-serif",
    toolbar: {
      show: false,
    },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "70%",
      borderRadiusApplication: "end",
      borderRadius: 8,
    },
  },
  tooltip: {
    shared: true,
    intersect: false,
    style: {
      fontFamily: "Inter, sans-serif",
    },
  },
  states: {
    hover: {
      filter: {
        type: "darken",
        value: 1,
      },
    },
  },
  stroke: {
    show: true,
    width: 0,
    colors: ["transparent"],
  },
  grid: {
    show: false,
    strokeDashArray: 4,
    padding: {
      left: 2,
      right: 2,
      top: -14
    },
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    show: false,
  },
  xaxis: {
    floating: false,
    labels: {
      show: true,
      style: {
        fontFamily: "Inter, sans-serif",
        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
      }
    },
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
  },
  yaxis: {
    show: false,
  },
  fill: {
    opacity: 1,
  },
}

if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("column-chart"), optionsTwo);
  chart.render();
}


const optionsThree = {
  chart: {
    // add these lines to update the size of the chart
    height: "200px",
    width: "100%",
    type: "area",
    fontFamily: "Inter, sans-serif",
    dropShadow: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
  },
  tooltip: {
    enabled: true,
    x: {
      show: false,
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.55,
      opacityTo: 0,
      shade: "#1C64F2",
      gradientToColors: ["#1C64F2"],
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    width: 6,
  },
  grid: {
    show: false,
    strokeDashArray: 4,
    padding: {
      left: 2,
      right: 2,
      top: -26
    },
  },
  series: [
    {
      name: "Developer",
      data: [15, 14, 14, 15, 13, 12],
      color: "#1A56DB",
    },
    {
      name: "Designer",
      data: [6, 4, 7, 4, 1, 1],
      color: "#7E3BF2",
    },
  ],
  xaxis: {
    categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
    labels: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
  },
  yaxis: {
    show: false,
    labels: {
      formatter: function (value) {
        return   value;
      }
    }
  },
}

if (document.getElementById("size-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("size-chart"), optionsThree);
  chart.render();
}


</script>