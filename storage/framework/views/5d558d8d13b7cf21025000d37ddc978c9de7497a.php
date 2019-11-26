<?php $__env->startSection('content'); ?>
<style>
</style>
	<div class="container">
		<table class="table">
			<a class="btn btn-primary" href='/equipments/add' data-toggle="modal" data-target="#addModal">Add Item</a>
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Category</th>
					<th scope="col">Quantity</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $equipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($equipment->id); ?></td>
						<td><?php echo e($equipment->name); ?></td>
						<td><?php echo e($equipment->category); ?></td>
						<td><?php echo e($equipment->quantity); ?></td>
						<td><a class="btn btn-primary" href="/equipments/<?php echo e($equipment->id); ?>/edit" data-toggle="modal" data-target="#editModal">Edit</a></td>
						<td><a href="/equipments/<?php echo e($equipment->id); ?>/edit">Edit</a></td>

					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>			
		</table>
			
	</div>

    <!-- Add Item Modal -->
  <div class="modal" id="addModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="/equipments/store">
		<?php echo csrf_field(); ?>
		  <div class="form-group">
		    <input type="text" class="form-control" name='name'  placeholder="Item Name">
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category"> 
		    	<?php $__currentLoopData = $equipments_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipments_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    	<option class="option"  value='<?php echo e($equipments_category->name); ?> '>
		    		<?php echo e($equipments_category->name); ?></option>
		    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </select>
		    <input type="text" class="form-control" name='quantity' v-model='quantity'  placeholder="Quantity">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    <div class="modal" id="editModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="/equipments/store">
		<?php echo csrf_field(); ?>
		  <div class="form-group">
		    <input type="text" class="form-control" name='name'  placeholder="Item Name">
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category"> 
		    	
		    </select>
		    <input type="text" class="form-control" name='quantity' v-model='quantity'  placeholder="Quantity">
		  </div>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
        </div>
         
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var vm = new Vue({
        el: '#app',
        data: {
           	selected_item:'',
           	categories:[
           		{name: 'Utensils'},
           		{name: 'Equipment'},
           	}
    })
</script>
</body>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ITE19-3C-2\Desktop\inventory\resources\views/equipments/index.blade.php ENDPATH**/ ?>