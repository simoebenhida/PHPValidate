<?php
namespace Inani\PHPValidate\Rules;

class Number extends AbstractRule implements Checkable
{

  /**
   * Check if is a number
   *
   * @param null $value
   * @return bool
   */
    public function isValid($value = null)
    {
        if (is_numeric($value)) {
            return true;
        }

        $this->errorFound();

        return false;
    }

    public function getError()
    {
        return "this field must be numeric";
    }
}
