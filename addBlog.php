<html>

<head>
    <title>Add new blog</title>
    <link rel="stylesheet" href="./assets/style.css">
    <!-- fontawesome CDN -->
    <script src="https://kit.fontawesome.com/3b03bde672.js" crossorigin="anonymous"></script>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Daisy Ui CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="py-10">
        <h2 class="text-center text-4xl font-mono underline underline-offset-8 pb-5">Our Blogs</h2>
        <form class="w-[500px] mx-auto p-5 border border-primary rounded-xl shadow shadow-xl" action="addBlogAction.php">
            <h2 class="text-center text-3xl text-primary pb-5">New Blog</h2>
            <p class="text-lg font-mono">Blog Title</p>
            <input class="w-full text-white mb-4 bg-transparent border border-primary outline-0 px-3 py-2  rounded focus:bg-slate-800" type="text" name="title" required>
            <p class="text-lg font-mono">Author Name</p>
            <input class="w-full text-white mb-4 bg-transparent border border-primary outline-0 px-3 py-2  rounded focus:bg-slate-800" type="text" name="author" required>
            <p class="text-lg font-mono">Publish Date</p>
            <input class="w-full text-white mb-4 bg-transparent border border-primary outline-0 px-3 py-2  rounded focus:bg-slate-800" type="date" name="date" required>
            <p class="text-lg font-mono">Description</p>
            <textarea class="w-full text-white mb-4 bg-transparent border border-primary outline-0 px-3 py-2  rounded focus:bg-slate-800" name="description" id="" rows="6"></textarea>
            <button class="btn btn-primary">Create</button>

        </form>
    </div>
</body>

</html>