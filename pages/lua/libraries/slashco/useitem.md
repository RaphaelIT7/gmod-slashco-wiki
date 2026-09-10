<function name="UseItem" parent="SlashCo" type="libraryfunc">
	<description>
		Uses the survivor's currently held item (the secondary slot takes priority over the primary one) by calling its <page>Item#OnUse</page> callback.<br>
		The item is removed afterwards unless <page>Item#OnUse</page> returns a truthy value, in which case an "item unusable" sound plays instead.<br>
		Does nothing in the lobby, for non-survivors, or while the player is frozen.
	</description>
	<realm>Server</realm>
	<group>Items</group>
	<args>
		<arg name="ply" type="Player">The player to use the item for.</arg>
	</args>
</function>
