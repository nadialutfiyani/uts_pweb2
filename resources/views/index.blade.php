<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadia Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#111D4A]">
    <nav class="flex mx-auto max-w-full py-5 justify-between fixed text-center items-center">
        <div class="ml-10 ">
            <h1 class="text-xl text-white font-bold">Nadia</h1>
        </div>

        <div class="ml-[750px] space-x-5">
            <a href="" class="text-[#E2B71D] font-extrabold text-base">Home</a>
            <a href="" class="text-white font-extrabold text-base">About</a>
            <a href="" class="text-white font-extrabold text-base">Skill</a>
            <a href="" class="text-white font-extrabold text-base">Projects</a>
            <a href="" class="text-white font-extrabold text-base">My Blog</a>
        </div>
    </nav>

    <section name="home" id="home" class="max-w-full mx-auto flex py-48 px-0 justify-between">
        <div class="ml-20">
            <h1 class="text-7xl text-white">I'm <span class="text-[#E2B71D] font-semibold">Nadia</span></h1>
            <h1 class="text-7xl text-[#E2B71D] ml-9 font-semibold">Lutfiyani</h1>
            <h3 class="text-2xl text-white py-5 ml-3">Fullstack Web Developer</h3>
        </div>

        <div>
            <img src="https://i.ibb.co/10B8ZPy/Ellipse-1.png" alt="" class="w-[350px] mr-40 -mt-14">
        </div>
    </section>

    <section name="about" id="about" class="max-w-full mx-auto flex py-32 px-0 justify-between">
        <div class="ml-28">
            <img src="https://i.ibb.co/hLWNtjp/Rectangle-14.png" alt="" class="w-[300px]">
        </div>

        <div class="mx-auto block">
            <h1 class="text-4xl text-[#E2B71D] ml-48 font-bold">About Me</h1>
            <p class="text-white text-xl py-5">Hello eveeryone,thank you for allowing me to
                introduce my self</p>
            <h2 class="text-white text-xl py-2">Name: Nadia Lutfiyani</h2> 
            <h2 class="text-white text-xl py-2">Date of birth: April 14, 2004</h2>
            <h2 class="text-white text-xl py-2">Address: Jl.Balikpapan Kota Tegal</h2>
            <h2 class="text-white text-xl py-2">Email: lutnadia39@gmail.com</h2>
            <h2 class="text-white text-xl py-2">Phone: +6285712933026</h2>
        </div>
    </section>

    <section name="skill" id="skill" class="max-w-full mx-auto flex flex-wrap py-32 px-0 justify-between">
        <div class="mx-96">
            <h1 class="text-4xl text-[#E2B71D] ml-48 font-bold">My Skill</h1>
        </div>

        <!-- <div class="ml-28 flex flex-wrap"> -->
            <div class="text-white flex flex-wrap ml-44 mt-12">
                <div class="ml-20 mr-40 mb-5">
                    <h2 class="text-center">PHP</h2>
                    <div class="bg-[#E2B71D] text-[#E2B71D] w-[300px] mt-3 rounded-full text-center text-base">45%</div>
                </div>

                <div>
                    <h2 class="text-center">Desain Grafis</h2>
                    <div class="bg-[#E2B71D] text-[#E2B71D] w-[300px] mt-3 rounded-full text-center text-base">45%</div>
                </div>

                <div class="ml-20 mr-40">
                    <h2 class="text-center">HTML 5</h2>
                    <div class="bg-[#E2B71D] text-[#E2B71D] w-[300px] mt-3 rounded-full text-center text-base">45%</div>
                </div>

                <div>
                    <h2 class="text-center">Microsoft Office</h2>
                    <div class="bg-[#E2B71D] text-[#E2B71D] w-[300px] mt-3 rounded-full text-center text-base">45%</div>
                </div>
            </div>
        <!-- </div> -->
    </section>
</body>
</html>