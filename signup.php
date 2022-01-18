<?php

include("header.php");

    if ($_GET['status'] != null){
        if( $_GET['status']=='sucessS'){
            echo '<script>
            alert("Welcome! Account create successfully")
            </script>';
        }
    }
?>

       <form method="post" action="caccount.php">


<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="fullname"
                        placeholder="Full Name" />

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email" />

                        <input 
                        type="tel"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="phoneNo"
                        placeholder="Phone Number" />

                    <input 
                        type="password" 
                        id="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Password" />

                    <input 
                        type="password"
                        id="confirm_password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password"
                        onblur="pass_Check()"
                        placeholder="Confirm Password" />

                    <button
                        type="submit"
                        id="submitBtn"
                        class=" flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >Create Account</button>

                    <div class="text-center text-sm text-grey-dark mt-4">
                        By signing up, you agree to the 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>
                </div>

                <div class="text-grey-dark mt-6">
                    Already have an account? 
                    <a class="no-underline border-b border-blue text-blue" href="/task2/login.php">
                        Log in
                    </a>.
                </div>
            </div>
        </div>


       </form>
        <script>

           function pass_Check(){
            password = document.getElementById('password').value
            Cfrm_password = document.getElementById('confirm_password').value
            submitBtn = document.getElementById('submitBtn')

            if(password != Cfrm_password){

                window.alert('Password Incorrect')
                submitBtn.disabled = true   

            } else {

                submitBtn.disabled = false   
            }
           }
            </script>
    </body>
</html>