<function name="ItemFunctionInternal" parent="Player" type="classfunc">
	<description>
		<internal></internal>
		Internal helper used by <page>Player:ItemFunction</page> and <page>Player:SecondaryItemFunction</page>.<br>
		Calls the given callback on each of the player's active effects first; if none of them return a non-`nil` value, falls back to calling it on the item equipped in the given slot.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="value" type="string">Name of the callback function to call.</arg>
		<arg name="slot" type="string">`"item"` or `"item2"`.</arg>
		<arg name="..." type="any" optional>Additional arguments passed to the callback.</arg>
	</args>
	<rets>
		<ret name="..." type="any" optional>The first non-`nil` return value from an active effect, or the item's return value.</ret>
	</rets>
</function>
