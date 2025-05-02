<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRCTC - Indian Railway Catering and Tourism Corporation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'irctc-blue': '#003580',
                        'irctc-orange': '#f37021',
                        'irctc-red': '#e30613',
                    },
                    backgroundImage: {
                        'train-pattern': "url('https://images.unsplash.com/photo-1516054575922-f0b8eeadec1a?q=80&w=2070&auto=format&fit=crop')",
                    }
                }
            }
        }
    </script>
    <style>
        .text-shadow {
            text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);
        }
        .deal-badge {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(227, 6, 19, 0.4); }
            70% { box-shadow: 0 0 0 8px rgba(227, 6, 19, 0); }
            100% { box-shadow: 0 0 0 0 rgba(227, 6, 19, 0); }
        }
        .station-chip {
            transition: all 0.3s ease;
        }
        .station-chip:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .slide-fade-enter-active {
            transition: all 0.3s ease-out;
        }
        .slide-fade-leave-active {
            transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
        }
        .slide-fade-enter-from,
        .slide-fade-leave-to {
            transform: translateY(20px);
            opacity: 0;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')


    <script>
        // Update date and time dynamically
        function updateDateTime() {
            const now = new Date();
            const options = { 
                day: '2-digit', 
                month: 'short', 
                year: 'numeric',
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit',
                hour12: false
            };
            document.getElementById('currentDateTime').textContent = 
                now.toLocaleDateString('en-IN', options) + 
                ' [' + now.toLocaleTimeString('en-IN', {hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false}) + ']';
        }
        
        // Update immediately and then every second
        updateDateTime();
        setInterval(updateDateTime, 1000);
        
        // Station suggestions data
        const stations = [
            "Delhi (DLI)", "Mumbai Central (MMCT)", "Chennai Central (MAS)", 
            "Kolkata (KOAA)", "Bangalore (SBC)", "Hyderabad (HYD)", 
            "Ahmedabad (ADI)", "Pune (PUNE)", "Jaipur (JP)", "Lucknow (LKO)"
        ];
        
        // DOM elements
        const fromStationInput = document.getElementById('fromStation');
        const toStationInput = document.getElementById('toStation');
        const fromSuggestions = document.getElementById('fromSuggestions');
        const toSuggestions = document.getElementById('toSuggestions');
        const swapStationsBtn = document.getElementById('swapStations');
        const classDropdown = document.getElementById('classDropdown');
        const classOptions = document.getElementById('classOptions');
        const selectedClass = document.getElementById('selectedClass');
        const recentSearches = document.getElementById('recentSearches');
        
        // Show station suggestions
        function showSuggestions(input, suggestionsContainer) {
            const value = input.value.toLowerCase();
            if (value.length === 0) {
                suggestionsContainer.classList.add('hidden');
                return;
            }
            
            const filtered = stations.filter(station => 
                station.toLowerCase().includes(value)
            );
            
            suggestionsContainer.innerHTML = filtered.map(station => 
                `<div class="p-2 hover:bg-gray-100 cursor-pointer">${station}</div>`
            ).join('');
            
            suggestionsContainer.classList.remove('hidden');
            
            // Add click event to suggestions
            suggestionsContainer.querySelectorAll('div').forEach(item => {
                item.addEventListener('click', () => {
                    input.value = item.textContent;
                    suggestionsContainer.classList.add('hidden');
                });
            });
        }
        
        // Swap stations
        swapStationsBtn.addEventListener('click', () => {
            const temp = fromStationInput.value;
            fromStationInput.value = toStationInput.value;
            toStationInput.value = temp;
        });
        
        // Class dropdown toggle
        classDropdown.addEventListener('click', () => {
            classOptions.classList.toggle('hidden');
        });
        
        // Select class
        classOptions.querySelectorAll('div').forEach(item => {
            item.addEventListener('click', () => {
                selectedClass.textContent = item.textContent;
                classOptions.classList.add('hidden');
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!classDropdown.contains(e.target) && !classOptions.contains(e.target)) {
                classOptions.classList.add('hidden');
            }
            
            if (!fromStationInput.contains(e.target) && !fromSuggestions.contains(e.target)) {
                fromSuggestions.classList.add('hidden');
            }
            
            if (!toStationInput.contains(e.target) && !toSuggestions.contains(e.target)) {
                toSuggestions.classList.add('hidden');
            }
        });
        
        // Input events
        fromStationInput.addEventListener('input', () => {
            showSuggestions(fromStationInput, fromSuggestions);
        });
        
        toStationInput.addEventListener('input', () => {
            showSuggestions(toStationInput, toSuggestions);
        });
        
        // Form submission
        document.getElementById('bookingForm').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Searching for trains...');
            // In a real app, you would make an API call here
            
            // Add to recent searches
            const searchItem = document.createElement('div');
            searchItem.className = 'border border-gray-200 rounded p-3 hover:border-irctc-blue transition-colors cursor-pointer';
            searchItem.innerHTML = `
                <div class="font-medium">${fromStationInput.value} → ${toStationInput.value}</div>
                <div class="text-sm text-gray-600 mt-1">${document.getElementById('journeyDate').value} | ${selectedClass.textContent}</div>
            `;
            
            recentSearches.insertBefore(searchItem, recentSearches.firstChild);
            
            // Limit to 6 recent searches
            if (recentSearches.children.length > 6) {
                recentSearches.removeChild(recentSearches.lastChild);
            }
        });
        
        // Initialize with some recent searches
        const sampleSearches = [
            { from: "Delhi (DLI)", to: "Mumbai (MMCT)", date: "05 May 2025", class: "AC 3 Tier (3A)" },
            { from: "Bangalore (SBC)", to: "Chennai (MAS)", date: "03 May 2025", class: "Sleeper (SL)" },
            { from: "Kolkata (KOAA)", to: "Delhi (DLI)", date: "07 May 2025", class: "AC 2 Tier (2A)" }
        ];
        
        sampleSearches.forEach(search => {
            const searchItem = document.createElement('div');
            searchItem.className = 'border border-gray-200 rounded p-3 hover:border-irctc-blue transition-colors cursor-pointer';
            searchItem.innerHTML = `
                <div class="font-medium">${search.from} → ${search.to}</div>
                <div class="text-sm text-gray-600 mt-1">${search.date} | ${search.class}</div>
            `;
            recentSearches.appendChild(searchItem);
        });
    </script>

</body>
</html>