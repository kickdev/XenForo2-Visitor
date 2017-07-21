<?php

namespace MMO\Visitor;

class ParseTag
{
    /**
     * Парсинг тега visitor
     */
    public static function renderVisitor()
    {
        $visitor = \XF::visitor();

        if ($visitor['user_id'])
        {
            return \XF::app()->templater()->renderTemplate('public:mmo_visitor');
        }
        else
        {
            return \XF::phrase('guest');
        }
    }
}