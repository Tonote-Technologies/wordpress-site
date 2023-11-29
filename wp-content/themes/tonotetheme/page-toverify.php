<?php get_header();
$document_id = $_GET['document_id'] ?? '';
?>

<section class="section  banner-bg py-5 bg-light">
    <div class="container mt-60 my-5">
        <div class="row align-items-center justify-content-start p-0">
            <div class="col-lg-6 col-md-12 col-12 col-xl-6">
                <div class="title-heading me-lg-4 animate__animated animate__slideInLeft">
                    <h1 class="mb-3 hero-header lg-screen">
                        ToVerify
                    </h1>
                    <h1 class="mb-3 hero-header sm-screen">
                        ToVerify
                    </h1>
                    <p class="para-desc">
                        Verify any document signed or notarised on ToNote with easy

                    </p>

                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12 col-xl-6">
                <div id="error" class="alert alert-danger" style="display:none"></div>
                <div class="card" id="table-wrapper" style="display: none">
                    <div class="card-body">
                        <table id="documentTable" class="table table-striped">
                            <div class="text-success my-2"><strong>Document Found</strong></div>
                            <tbody>
                                <!-- Table body will be populated dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="my-4">
                    <div class="">
                        <?php include('verification.php') ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- <input type="text" value=""> -->
<?php get_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>



    let loading = false;
    const result = document.getElementById('table-wrapper');
    const errorDiv = document.getElementById('error');

    const fetchDocument = async (documentId) => {
        const END_POINT = 'https://dev-api.gettonote.com/api/v1/unauthenticated-documents/';
        loading = true;
        try {
            const response = await axios.get(`${END_POINT}${documentId}`);

            if (response.data) {
                documentData = response.data;
                updateTable(documentData.data);
                errorDiv.style.display = 'none';

            } else {
                throw new Error('Sorry, no record found for this ID');

            }
        } catch (error) {
            // Handle error, set the 'error' variable, for example:
            result.style.display = 'none';
            error = error.message || 'Error fetching document';
            errorDiv.style.display = 'block';
            errorDiv.innerHTML = `<p>Sorry, no record found for this ID</p>`;
        } finally {
            loading = false;
        }
    };

    document.addEventListener('click', function (event) {
        if (event.target.id === 'verify') {
            event.preventDefault();
            let document_id = document.getElementById('document_id').value;
            getDocumentIdFromUrl(document_id);
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const verifyInput = document.getElementById('document_id');
        const documentId = verifyInput.value.trim();
        console.log(documentId)
        if (documentId !== '') {
            getDocumentIdFromUrl(documentId);
        }
    });

    // Get document ID from URL parameters
    const getDocumentIdFromUrl = (document_id) => {
        fetchDocument(document_id);
    };

    function formatCreatedAt(created_at) {
        const date = new Date(created_at);
        const formattedDate = date.toISOString().replace("T", " ").split(".")[0];
        return formattedDate;
    }

    function updateTable(data) {
        result.style.display = 'block';
        const tableBody = document.getElementById('documentTable').getElementsByTagName('tbody')[0];
        const propertiesToShow = ['title', 'status', 'participants_count', 'created_at'];

        // Clear existing content in the table body
        tableBody.innerHTML = '';


        for (const property of propertiesToShow) {
            const newRow = tableBody.insertRow();
            newRow.insertCell(0).innerText = property.charAt(0).toUpperCase() + property.slice(1); // Capitalize first letter

            if (property === 'created_at') {
                newRow.insertCell(1).innerText = formatCreatedAt(data[property]);
            } else {
                newRow.insertCell(1).innerText = data[property];
            }
        }
    }


</script>