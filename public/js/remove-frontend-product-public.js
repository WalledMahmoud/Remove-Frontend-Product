jQuery(document).ready(function ($) {

	$('.remove-product').click(function () {

		if (confirm('Are you sure you want to remove this product?')) {

			var product_id = $(this).data('product-id');
			var data = {
				action: 'remove_product',
				product_id: product_id,
				security: remove_product_params.nonce,
			};
			$.ajax({
				url: remove_product_params.ajax_url,
				type: 'POST',
				data: data,
				success: function (response) {
					if (response.success) {
						alert('Product removed successfully');
						window.location.href = response.data;
					} else {
						alert('Error: ' + response.data);
					}
				},
				error: function (error) {
					console.log(error);
				},
			});
		}
	});
});
