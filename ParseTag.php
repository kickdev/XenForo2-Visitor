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

        if ($visitor ['user_id'])
		{
            return $visitor ['username'];
        }
		else
		{
            return \XF::phrase('guest');
        }
    }
}