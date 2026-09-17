<function name="LoadItems" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Includes every effect file in `lua/slashco/effect/` and item file in `lua/slashco/item/`, running their <page>SlashCo.RegisterEffect</page>/<page>SlashCo.RegisterItem</page> calls.<br>
		Called automatically on startup and whenever game content changes.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
</function>
