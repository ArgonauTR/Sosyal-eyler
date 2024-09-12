<footer class="text-center">
    <hr class="my-3">
    <ul class="list-inline">
        <?php
        $orders = orderinfo("SELECT * FROM orders ORDER BY order_num ASC");
        foreach ($orders as $order) {
            echo '<li class="list-inline-item">
                        <a href="' . $order["order_value"] . '" class="text-decoration-none text-muted">
                        <i class="bi bi-' . $order["order_icon"] . '"></i> ' . $order["order_name"] . '
                        </a>
                    </li>';
        }

        ?>
    </ul>

    <p>
        <?php echo optioninfo("option_footer_text"); ?>
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script>
        // Initialize Quill editor
        const quill = new Quill('#editor', {
            theme: 'snow'
        });

        // Function to set the content of the hidden input field before form submission
        function setContent() {
            const editorContent = document.getElementById('editorContent');
            editorContent.value = quill.root.innerHTML;
        }

        // Add an event listener to the form
        document.getElementById('postForm').addEventListener('submit', function(event) {
            setContent();
        });
    </script>

    </html>