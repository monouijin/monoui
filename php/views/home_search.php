<?php

namespace view\home_search;

function index()
{
?>
    <div class="w3-container">
        <form action="" method="POST" class="w3-container">
            <p>
                <input type="text" name="search_topic" class="w3-input w3-border" placeholder="Search for Anything" required>
            </p>
            <p>
                <input type="submit" class="w3-btn w3-teal w3-round " value="探す">
            </p>
        </form>
    </div>
<?php
}
?>