<script>
    $(document).ready(function() {
        new Table({
            name: "services",
            columns: [{
                    title: 'title',
                    render: function(data, type, row) {
                        return `<a target="_blank" class="row-title" href="${row.publish_url}">${row.title}</a>
                                    <div>
                                        <ul class="actions-list">
                                            <li><a href="/admin/services/${row.id}/edit">Edit</i></a></li>
                                            <li><button class="delete-confirm-btn" data-popup="delete-confirm-${data}">Trash</button></li>
                                        </ul>
                                        <div class="text-center delete-popup delete-confirm-${data} d-none">
                                            <div class="mb-1"> Are you sure?</div>
                                            <div class="d-flex justify-content-center">
                                                <form action="/admin/services/${row.id}" class="delete-form" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                                                            <button type="submit" class="mr-1 delete_form">
                                                                Yes
                                                            </button>
                                                </form>
                                                <button class="mr-1 delete-popup-close" type="button">
                                                    No
                                                </button>
                                            </div>
                                        </div>
                                    </div>`;
                    }
                },
                {
                    title: 'content',
                    data: 'content',
                    type: 'text',
                },
                {
                    title: 'price',
                    data: 'price',
                    type: 'text',
                },
                {
                    title: 'Active',
                    render: function(data, type, row) {
                        let color = row.active ? 'green' : 'red'

                        return `<i class="fas fa-circle" style="color: ${color}"></i>`;
                    }
                },
                {
                    title: 'Last Modified',
                    data: 'updated_at',
                    type: 'date',
                },
                {
                    title: 'Created',
                    data: 'created_at',
                    type: 'date',
                },
            ],
        })
    });
</script>
