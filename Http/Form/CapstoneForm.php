<?php

namespace Http\Form;

use Core\Validator;

class CapstoneForm
{
    protected $errors = [];

    public function handleCapstoneForm($title, $author, $adviser, $year_published, $category, $abstract)
    {
        if (! Validator::validateString($title, 3, 50)) {
            $this->errors['title'] = "Title should have at least 3 character and not greater than 50";
        }

        if (! Validator::validateString($author, 3, 50)) {
            $this->errors['author'] = "Author should have at least 3 character and not greater than 50";
        }
        if (! Validator::validateString($adviser, 3, 50)) {
            $this->errors['adviser'] = "Adviser should have at least 3 character and not greater than 50";
        }
        if (! Validator::validateString($year_published, 4, 11)) {
            $this->errors['year_published'] = "Year published should have at least 4 character";
        }
        if (! Validator::validateString($category, 1, 11)) {
            $this->errors['category'] = "Category should have at least 3 character and not greater than 50";
        }
        if (! Validator::validateString($abstract, 200, 500)) {
            $this->errors['abstract'] = "Abstract should have at least 200 character and not greater than 500";
        }

        return empty($this->errors);
    }

    public function getError()
    {
        return $this->errors;
    }
}
