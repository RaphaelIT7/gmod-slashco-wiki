<function name="DropAllItems" parent="SlashCo" type="libraryfunc">
	<description>
		Drops both of a survivor's item slots by calling <page>SlashCo.DropItem</page> twice.<br>
		Clears all of the player's active effects first unless `noEffect` is `true`.
	</description>
	<realm>Server</realm>
	<group>Items</group>
	<args>
		<arg name="ply" type="Player">The player whose items should be dropped.</arg>
		<arg name="noEffect" type="boolean" optional>If `true`, the player's active effects are not cleared.</arg>
	</args>
</function>
