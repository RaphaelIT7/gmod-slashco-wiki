<function name="DropItem" parent="SlashCo" type="libraryfunc">
	<description>
		Drops the survivor's currently held item (the secondary slot takes priority unless it's empty or flagged via `ignoreField`) as a physical entity in the world.<br>
		Runs the item's <page>Item#PreDrop</page>/<page>Item#PreDropSecondary</page>, <page>Item#OnDrop</page>, <page>Item#OnSwitchFrom</page> and <page>Item#ItemDropped</page> callbacks along the way; dropping can be cancelled by <page>Item#PreDrop</page>/<page>Item#PreDropSecondary</page>.<br>
		Does nothing in the lobby, for non-survivors, or while the player is frozen.
	</description>
	<realm>Server</realm>
	<group>Items</group>
	<args>
		<arg name="ply" type="Player">The player whose item should be dropped.</arg>
		<arg name="dropCallback" type="function" optional>Called with `(ply, item, droppeditem, phys)` once the item has been dropped, or with `(nil)` if nothing was dropped.</arg>
		<arg name="ignoreField" type="string" optional>If the equipped secondary item has this field set, the primary slot is dropped instead.</arg>
	</args>
</function>
