<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<div class="form-group">
    <label class="control-label">Enter a Name</label>
    <input id="name">
</div>


<script type="module">
    import bootstrapValidate from './bootstrap-validate.js';

    bootstrapValidate('#name', 'max:30:Your name must not be longer than 30 characters');
</script>
</body>
</html>