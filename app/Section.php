<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function childTables()
    {
        return $this->hasMany('App\ChildTable');
    }

    public function horizontalAttributes()
    {
        return $this->hasManyThrough('App\HorizontalAttribute','App\ChildTable');
    }

    public function getHorizontalAttributesOfChildTable($module, $sectionAlias, $childTableAlias)
    {
        /* Get all section ID match the section ALIAS that belong to the given module*/
        $sectionId = $this->where('module', $module)->where('alias', $sectionAlias)->select('id')->first()->toArray();

        /* Get all child table ID match child table ALIAS that belong to the given section*/
        $childTableId = \App\ChildTable::select('id')->where('section_id', $sectionId)->where('alias', $childTableAlias)->first()->toArray();

        /* Get all horizontal attribute ID that belong to the given child table*/
        $horizontalAttributes = \App\HorizontalAttribute::select('id','alias')->where('child_table_id',$childTableId)->get()->toArray();

        return $horizontalAttributes;
    }
}
