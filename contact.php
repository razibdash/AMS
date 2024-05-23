<?php
require_once("header.php");
?>
<!-- Contact US START -->
<section class="bg-[#ECF9FC] p-5 ">
        <div class="contact-us mt-10  container-md">
            <div class="contact-heading">
                    <h1 class="text-center m-0 text-black-500 font-extrabold  dark:text-black-400 text-4xl">Contact <span class="text-blue-800 bold">Us</span></h1>
                            <p class="font-normal text-center text-gray-500 dark:text-gray-400">Contact Us Anythime.</p>
            </div>
            <div class="map-mail flex justify-center ">
                <div class="map-box mt-5">
                    <div class="icon text-center bg-white rounded-lg shadow-lg p-4">
                            <svg class="w-8 h-8 p-1 border border-4 border-blue-600 border-dotted rounded-full m-auto text-blue-600 dark:text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                            </svg>
                            <h1 class="font-bold text-gray-600 mt-3 dark:text-gray-700">Our Address</h1>
                            <p class="font-normal text-gray-500 dark:text-gray-400">Admin Building, MU</p>
                    </div>
                    <div class="map-insert mt-5">
                        <span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.0567059008013!2d91.97044227515443!3d24.930138077883875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552bc71c899d%3A0x804e438bcc32b390!2sMetropolitan%20University%20Sylhet!5e0!3m2!1sen!2sbd!4v1714243771016!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></span>
                    </div>
                </div>
                <div class="mail-box">
                    <div class="email-call flex justify-center items-center">
                            <div class="icon w-80 m-4 text-center bg-white rounded-lg shadow-lg p-4">
                            <svg class="w-8 h-8 p-1 border border-4 border-blue-600 border-dotted rounded-full m-auto text-blue-600 dark:text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"/>
                            </svg>

                                <h1 class="font-bold mt-3 text-gray-600 dark:text-gray-700">Email Us</h1>
                                <p class="font-normal text-gray-500 dark:text-gray-400">alumni@MU.edu</p>
                            </div>
                            <div class="icon w-80 m-4 text-center bg-white rounded-lg shadow-lg p-4">
                            <svg class="w-8 h-8 p-1 border border-4 border-blue-600 border-dotted rounded-full m-auto text-blue-600 dark:text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                                </svg>

                                    <h1 class="font-bold mt-3 text-gray-600 dark:text-gray-700">Call Us</h1>
                                    <p class="font-normal text-gray-500 dark:text-gray-400">017918303764</p>
                            </div>
                    </div>
                    <div class="contact-form p-5 m-3 bg-white h-auto rounded-lg shadow-lg">                
                            <form>
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="first_name" class=" mt-3 block mb-2 text-sm font-medium text-black-600 dark:text-black-600">First name</label>
                                        <input type="text" id="first_name" class="rounded border border-gray w-full" placeholder="frist name" required />
                                    </div>
                                    <div>
                                        <label for="last_name" class="mt-3 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Last name</label>
                                        <input type="text" id="last_name" class="rounded border border-gray w-full" placeholder="last name" required />
                                    </div>                               
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email address</label>
                                    <input type="email" id="email" class="rounded border border-gray w-full" placeholder="mu@company.com" required />
                                </div> 
                            
                                <div class="mb-6">
                                    
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your message</label>
                                    <textarea id="message" rows="4" class="rounded border border-gray w-full p-2" placeholder="Write your thoughts here..."></textarea>

                                </div> 
                                <button type="submit" class="text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
  </section>
<!-- Contact US END -->
<?php
require_once("footer.php");
?>