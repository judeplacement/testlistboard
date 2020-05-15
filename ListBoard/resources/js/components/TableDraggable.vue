<template>
  	<table>
				<tr v-for="(invoices, invoice) in invoices" v-bind:key="invoices.id"> 
					<td><i class="fas fa-circle"></i></td>
					<td>{{ invoice.id}}</td>
					<td>{{ invoice.invoicedate }}</td>
					<td>{{ invoice.companyname }}</td>
					<td>{{ invoice.projectname }}</td>
					<td>${{ invoice.invoiceamount }}</td>
					<td>{{ invoice.invoicestatus }}</td>
				</tr>


		<button onclick="window.location.href = 'invoices/create';" class="bg-blue-500">Add Invoice</button>

		</table>
    
</template>

<script>

export default {
  
  props: ['invoices'],
  mounted(){
    console.log('Component mounted.')
  }
}
</script>