<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'TigistDev') }} | Full-Stack Web Developer</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans antialiased">

    <!-- Header / Navigation Menu -->
    <nav class="p-6 border-b border-gray-800 flex justify-between items-center max-w-6xl mx-auto sticky top-0 bg-gray-900/90 backdrop-blur z-50">
        <h1 class="text-xl font-bold text-indigo-400">Tigist Dev</h1>
        <div class="hidden md:flex space-x-6">
            <a href="#about" class="hover:text-indigo-400 transition">About</a>
            <a href="#skills" class="hover:text-indigo-400 transition">Skills</a>
            <a href="#projects" class="hover:text-indigo-400 transition">Projects</a>
            <a href="#dashboard" class="hover:text-indigo-400 transition">Dashboard View</a>
            <a href="#experience" class="hover:text-indigo-400 transition">Experience</a>
            <a href="#contact" class="hover:text-indigo-400 transition">Contact</a>
        </div>
    </nav>

    <!-- About / Hero Section -->
    <section id="about" class="max-w-6xl mx-auto px-6 py-20 md:flex items-center justify-between gap-10">
        <div class="md:w-2/3">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                Hi, I'm <span class="text-indigo-500">Full-Stack Web Developer</span>
            </h2>
            <p class="text-gray-400 text-lg mb-6 leading-relaxed">
                I build reliable, secure, and high-performance web applications using Laravel, PHP, MySQL, and modern frontend technologies. Specialized in role-based access control (Spatie), system design, and database management.
            </p>
            <div class="flex gap-4">
                <a href="#projects" class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-lg font-semibold transition">
                    View Projects
                </a>
                <a href="#contact" class="border border-gray-700 hover:border-gray-500 px-6 py-3 rounded-lg font-semibold transition">
                    Contact Me
                </a>
            </div>
        </div>
    </section>

    <!-- Technical Skills Section -->
    <section id="skills" class="bg-gray-800 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-8 text-center">Technical Skills</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($skills as $category => $skillList)
                    <div class="bg-gray-900 p-6 rounded-xl border border-gray-700">
                        <h4 class="text-xl font-semibold mb-4 text-indigo-400">{{ $category }}</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($skillList as $skill)
                                <span class="bg-gray-800 text-gray-300 px-3 py-1 rounded-md text-sm border border-gray-700">
                                    {{ $skill }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="max-w-6xl mx-auto px-6 py-20">
        <h3 class="text-3xl font-bold mb-10 text-center">Featured Projects</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Project 1: Feedback & Complaint System -->
            <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden flex flex-col justify-between shadow-lg">
                <div>
                    <img src="{{ asset('images/fms.jpg') }}" alt="Feedback and Complain System" class="w-full h-52 object-cover border-b border-gray-700">
                    <div class="p-6">
                        <h4 class="text-2xl font-bold mb-3 text-white">Feedback & Complaint Management System</h4>
                        <p class="text-gray-400 mb-4 text-sm leading-relaxed">
                            A web-based system designed for Injibara University allowing students and staff to submit feedback and complaints with Spatie role-based access control and dashboard reporting[cite: 1].
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-indigo-900/50 text-indigo-300 text-xs px-2.5 py-1 rounded border border-indigo-700">Laravel</span>
                            <span class="bg-indigo-900/50 text-indigo-300 text-xs px-2.5 py-1 rounded border border-indigo-700">MySQL</span>
                            <span class="bg-indigo-900/50 text-indigo-300 text-xs px-2.5 py-1 rounded border border-indigo-700">Tailwind CSS</span>
                            <span class="bg-indigo-900/50 text-indigo-300 text-xs px-2.5 py-1 rounded border border-indigo-700">Spatie</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 flex gap-4 border-t border-gray-700/50 mt-4">
                    <a href="https://github.com/TigistY" target="_blank" class="text-indigo-400 hover:underline text-sm font-semibold pt-4">
                        GitHub Code &rarr;
                    </a>
                    <a href="http://fcms.etcodnet.com" target="_blank" class="text-green-400 hover:underline text-sm font-semibold pt-4">
                        Live Demo &rarr;
                    </a>
                </div>
            </div>

            <!-- Project 2: Car Rental Management System -->
            <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden flex flex-col justify-between shadow-lg">
                <div>
                    <img src="{{ asset('images/carrental.jpg') }}" alt="Car Rental Management System" class="w-full h-52 object-cover border-b border-gray-700">
                    <div class="p-6">
                        <h4 class="text-2xl font-bold mb-3 text-white">Car Rental Management System</h4>
                        <p class="text-gray-400 mb-4 text-sm leading-relaxed">
                            A comprehensive web application for managing car listings, customer bookings, vehicle availability, and automated reservation workflows.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-indigo-900/50 text-indigo-300 text-xs px-2.5 py-1 rounded border border-indigo-700">PHP</span>
                            <span class="bg-indigo-900/50 text-indigo-300 text-xs px-2.5 py-1 rounded border border-indigo-700">Laravel</span>
                            <span class="bg-indigo-900/50 text-indigo-300 text-xs px-2.5 py-1 rounded border border-indigo-700">Bootstrap</span>
                            <span class="bg-indigo-900/50 text-indigo-300 text-xs px-2.5 py-1 rounded border border-indigo-700">MySQL</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 flex gap-4 border-t border-gray-700/50 mt-4">
                    <a href="https://github.com/TigistY" target="_blank" class="text-indigo-400 hover:underline text-sm font-semibold pt-4">
                        GitHub Code &rarr;
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- NEW SECTION: Admin Dashboard Preview Section -->
    <section id="dashboard" class="bg-gray-800 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-2 text-center">System Admin Dashboard Overview</h3>
            <p class="text-gray-400 text-center mb-10 text-sm">Example architecture of administrative controls and analytical metrics implemented in enterprise systems.</p>
            
            <!-- Dashboard Mockup Card -->
            <div class="bg-gray-900 rounded-xl border border-gray-700 p-6 shadow-2xl">
                <!-- Top Metric Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                        <span class="text-xs text-gray-400 uppercase font-semibold">Total Submissions</span>
                        <p class="text-2xl font-bold text-indigo-400 mt-1">1,248</p>
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                        <span class="text-xs text-gray-400 uppercase font-semibold">Pending Requests</span>
                        <p class="text-2xl font-bold text-yellow-400 mt-1">42</p>
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                        <span class="text-xs text-gray-400 uppercase font-semibold">Resolved Complaints</span>
                        <p class="text-2xl font-bold text-green-400 mt-1">1,180</p>
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                        <span class="text-xs text-gray-400 uppercase font-semibold">Active System Users</span>
                        <p class="text-2xl font-bold text-blue-400 mt-1">350+</p>
                    </div>
                </div>

                <!-- Recent System Activity Table -->
                <h4 class="text-lg font-semibold mb-4 text-gray-200">Recent Admin Activities</h4>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-400">
                        <thead class="bg-gray-800 text-gray-300 uppercase text-xs">
                            <tr>
                                <th class="py-3 px-4">Module</th>
                                <th class="py-3 px-4">Action</th>
                                <th class="py-3 px-4">User Role</th>
                                <th class="py-3 px-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800">
                            <tr>
                                <td class="py-3 px-4 font-medium text-white">Feedback Management</td>
                                <td class="py-3 px-4">Assigned ticket to department head</td>
                                <td class="py-3 px-4"><span class="bg-indigo-900/40 text-indigo-300 text-xs px-2 py-0.5 rounded border border-indigo-700">Super Admin</span></td>
                                <td class="py-3 px-4 text-green-400">Completed</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 font-medium text-white">Role Permission (Spatie)</td>
                                <td class="py-3 px-4">Updated user access levels</td>
                                <td class="py-3 px-4"><span class="bg-indigo-900/40 text-indigo-300 text-xs px-2 py-0.5 rounded border border-indigo-700">System Admin</span></td>
                                <td class="py-3 px-4 text-green-400">Completed</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 font-medium text-white">Car Rental System</td>
                                <td class="py-3 px-4">Approved vehicle reservation #1042</td>
                                <td class="py-3 px-4"><span class="bg-gray-700 text-gray-300 text-xs px-2 py-0.5 rounded">Manager</span></td>
                                <td class="py-3 px-4 text-yellow-400">In Progress</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience / Education Section -->
    <section id="experience" class="py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-8 text-center">Education & Background</h3>
            <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 max-w-3xl mx-auto">
                <h4 class="text-xl font-bold text-indigo-400">B.Sc. in Computer Science</h4>
                <p class="text-gray-300 font-medium mt-1">Injibara University</p>
                <p class="text-gray-400 text-sm mt-2">
                    Focused on Software Engineering, Database Systems, Web Development, Object-Oriented Programming, and Networking Concepts.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-800 py-20 text-center">
        <div class="max-w-2xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-4">Get In Touch</h3>
            <p class="text-gray-400 mb-8">Feel free to reach out for project opportunities, web development roles, or technical inquiries.</p>
            <a href="mailto:your-email@example.com" class="inline-block bg-indigo-600 hover:bg-indigo-700 px-8 py-3 rounded-lg font-bold text-lg transition">
                Send Email
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 text-center text-gray-500 text-sm border-t border-gray-800">
        &copy; {{ date('Y') }} Tigist Dev. Built with Laravel & Tailwind CSS.
    </footer>

</body>
</html>