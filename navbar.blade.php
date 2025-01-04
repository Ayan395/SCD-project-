<header>
        <h3>Market Masters</h3>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/service') }}">Services</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <div class="search-container ms-auto">
                <input 
                    type="text" 
                    id="searchInput" 
                    placeholder="Search by Name" 
                    class="form-control"
                />
                <div id="searchResults" class="dropdown-menu mt-2" style="display: none; position: absolute; z-index: 1000;">
                    <!-- Dynamic dropdown items will be added here -->
                </div>
            </div>
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>

public function search(Request $request)
    {
        $query = $request->input('query');
        
        $results = Servie::where('name', 'LIKE', "%{$query}%")
                        ->orWhere('category', 'LIKE', "%{$query}%")
                        ->get();
    
        return response()->json($results);
    }
    $(document).ready(function() {
        // Event handler for search input
        $('#searchInput').on('keyup', function() {
            let query = $(this).val().trim();

            if (query.length > 0) {
                // Perform the AJAX request
                $.ajax({
                    // Ensure this route exists and is correctly configured
                    method: 'GET',
                    data: { query: query },
                    success: function(response) {
                        if (response.length > 0) {
                            let resultsHTML = response.map(item => 
                                <a href="${item.url}" class="dropdown-item">${item.name}</a>
                            ).join('');
                            $('#searchResults').html(resultsHTML).show();
                        } else {
                            $('#searchResults').html('<p class="dropdown-item text-muted">No results found</p>').show();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                $('#searchResults').empty().hide(); // Hide results if input is empty
            }
        });

        // Hide results when clicking outside the search box
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#searchInput, #searchResults').length) {
                $('#searchResults').hide();
            }
        });
    });
 
</script>


